<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    public function __construct()
    {
        //sleep(5);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 200);
        }
        return response()->json(['msg' => 'Incorrect username or password. Please try again.'], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $inputs = $validator->validated();
        $inputs['password'] = \Hash::make($inputs['password']);
        if ($user = User::create($inputs)) {
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['user' => $user, 'token' => $token, 'msg' => 'Registartion successfull.'], 200);
        }
        return response()->json(['msg' => 'Failed to register please try again.'], 500);
    }

    public function users()
    {
        $users = User::latest()->get();
        return response()->json(['users' => $users], 200);
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $inputs = $validator->validated();
        $inputs['password'] = \Hash::make($inputs['password']);

        if ($request->has('photo')) {
            $inputs['photo'] = $this->uploadImage('images/users', $request->photo, [75, 75]);
        }

        if (User::create($inputs)) {
            return response()->json(['msg' => 'User saved successfully.'], 200);
        }
        return response()->json(['msg' => 'Failed to save user please try again.'], 500);
    }

    public function findUser(User $user)
    {
        return response()->json($user, 200);
    }

    public function updateUser(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $inputs = $validator->validated();
        if ($request->has('password') && $request->password != "") {
            $inputs['password'] = \Hash::make($inputs['password']);
        }
        if ($request->has('photo')) {
            $inputs['photo'] = $this->uploadImage('images/users', $request->photo, [75, 75], $user->photo);
        }
        if ($user->update($inputs)) {
            return response()->json(['message' => 'User updated successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to update user please try again.'], 500);
    }

    private function uploadImage($destination, $photo, $ratio = [], $old_photo = null)
    {
        $destinationPath =  public_path($destination);
        if (!file_exists($destinationPath)) {
            @mkdir($destinationPath, 0777, true);
        } else {
            @chmod($destinationPath, 0777);
        }

        if (!is_null($old_photo) && file_exists($old_photo)) {
            unlink($old_photo);
        }

        $img = Image::make($photo->getRealPath());
        if (!empty($ratio)) {
            $img->resize($ratio[0], $ratio[1], function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $img->save($destinationPath . '/' . uniqid(time()) . '.' . $photo->getClientOriginalExtension());
        return $destination . '/' . $img->basename;
    }

    public function destroyUser(User $user)
    {
        if ($user->delete()) {
            return response()->json(['message' => 'User deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete user please try again.'], 500);
    }

    //category start

    public function getCategory()
    {
        return response()->json(['categories' => Category::latest()->get()], 200);
    }

    public function findCategory(Category $category)
    {
        return response()->json(['category' => $category], 200);
    }

    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|unique:categories',
            'status' => ['required', Rule::in(['Active', 'Inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }

        if (Category::create($validator->validated())) {
            return response()->json(['message' => 'Category saved successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to save category please try again.'], 500);
    }

    public function updateCategory(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|unique:categories,name,' . $category->id,
            'status' => ['required', Rule::in(['Active', 'Inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        if ($category->update($validator->validated())) {
            return response()->json(['message' => 'Category updated successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to update category please try again.'], 500);
    }

    public function destroyCategory(Category $category)
    {
        if ($category->delete()) {
            return response()->json(['message' => 'Category deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete category please try again.'], 500);
    }

    //category end

    //subcategory start

    public function getSubCategory()
    {
        return response()->json(['subcategories' => SubCategory::latest()->get()], 200);
    }

    public function findSubCategory(SubCategory $subcategory)
    {
        return response()->json(['subcategory' => $subcategory], 200);
    }

    public function storeSubCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|numeric|exists:categories,id',
            'name' => 'required|string|min:3|unique:sub_categories',
            'status' => ['required', Rule::in(['Active', 'Inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }

        if (SubCategory::create($validator->validated())) {
            return response()->json(['message' => 'Sub Category saved successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to save sub category please try again.'], 500);
    }

    public function updateSubCategory(Request $request, SubCategory $subcategory)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|numeric|exists:categories,id',
            'name' => 'required|string|min:3|unique:sub_categories,name,' . $subcategory->id,
            'status' => ['required', Rule::in(['Active', 'Inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        if ($subcategory->update($validator->validated())) {
            return response()->json(['message' => 'Sub Category updated successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to update sub category please try again.'], 500);
    }

    public function destroySubCategory(SubCategory $subcategory)
    {
        if ($subcategory->delete()) {
            return response()->json(['message' => 'Sub Category deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete sub category please try again.'], 500);
    }

    //subcategory end

    //product start

    public function getProduct()
    {
        return response()->json(['products' => Product::latest()->get()], 200);
    }

    public function findProduct(Product $product)
    {
        return response()->json(['product' => $product], 200);
    }

    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|unique:products',
            'sub_category_id' => 'required|numeric|exists:sub_categories,id',
            'status' => ['required', Rule::in(['Active', 'Inactive'])],
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        $inputs = $validator->validated();
        if (isset($inputs['photo']) && !empty($inputs['photo'])) {
            $inputs['photo'] = $this->uploadImage('images/products', $inputs['photo'], [150, 150]);
        }
        if (Product::create($inputs)) {
            return response()->json(['message' => 'Product saved successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to save product please try again.'], 500);
    }

    public function updateProduct(Request $request, Product $product)
    {

        $validator = Validator::make($request->all(), [
            'sub_category_id' => 'required|numeric|exists:sub_categories,id',
            'name' => 'required|string|min:3|unique:products,name,' . $product->id,
            'status' => ['required', Rule::in(['Active', 'Inactive'])],
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        $inputs = $validator->validated();
        if (isset($inputs['photo']) && !empty($inputs['photo'])) {
            $inputs['photo'] = $this->uploadImage('images/products', $inputs['photo'], [150, 150], $product->photo);
        }
        if ($product->update($inputs)) {
            return response()->json(['message' => 'Product updated successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to product sub category please try again.'], 500);
    }

    public function destroyProduct(Product $product)
    {
        if ($product->delete()) {
            return response()->json(['message' => 'Product deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete product please try again.'], 500);
    }

    //product end


    //post start

    public function getPost()
    {
        return response()->json(['posts' => Post::with(['user', 'comments'])->latest()->get()], 200);
    }

    public function findPost(Post $post)
    {
        return response()->json(['post' => $post], 200);
    }

    public function postDetail(Post $post)
    {
        return response()->json(
            [
                'post' => $post->load(['user', 'comments.user'])
            ],
            200
        );
    }

    public function storePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|unique:posts',
            'description' => 'required|string|min:10',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        $inputs = $validator->validated();
        if (isset($inputs['photo']) && !empty($inputs['photo'])) {
            $inputs['photo'] = $this->uploadImage('images/posts', $inputs['photo'], []);
        }
        if ($request->user()->posts()->create($inputs)) {
            return response()->json(['message' => 'Post saved successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to save post please try again.'], 500);
    }

    public function updatePost(Request $request, Post $post)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|unique:posts,title,' . $post->id,
            'description' => 'required|string|min:10',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        $inputs = $validator->validated();
        if (isset($inputs['photo']) && !empty($inputs['photo'])) {
            $inputs['photo'] = $this->uploadImage('images/posts', $inputs['photo'], [], $post->photo);
        }
        if ($post->update($inputs)) {
            return response()->json(['message' => 'Post updated successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to post sub category please try again.'], 500);
    }

    public function destroyPost(Post $post)
    {
        if ($post->delete()) {
            return response()->json(['message' => 'Post deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete post please try again.'], 500);
    }

    public function storePostComment(Request $request, Post $post)
    {        
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }
        $inputs = $validator->validated();
        $inputs['user_id'] = $request->user()->id;
        if ($comment = $post->comments()->create($inputs)) {
            return response()->json(['message' => 'Comment added successfully.', 'comment' => $comment->load('user')], 200);   
        }
        return response()->json(['message' => 'Failed to save comment please try again.'], 500);
    }

    public function updatePostComment(Request $request, Comment $comment)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Please enter valid inputs'], 422);
        }        
        if ($comment->update($validator->validated())) {
            return response()->json(['message' => 'Comment updated successfully.', 'comment' => $comment->comment], 200);
        }
        return response()->json(['message' => 'Failed to update comment please try again.'], 500);
    }

    public function destroyPostComment(Comment $comment)
    {
        if ($comment->delete()) {
            return response()->json(['message' => 'Comment deleted successfully.'], 200);
        }
        return response()->json(['message' => 'Failed to delete comment please try again.'], 500);
    }

    //post end
}
