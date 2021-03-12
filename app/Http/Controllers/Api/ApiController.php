<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Product;
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

    //product end
}
