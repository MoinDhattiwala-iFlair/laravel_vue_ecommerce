<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $users = User::get();
        return response()->json(['users' => $users], 200);
    }

    public function storeUser(Request $request)
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
        if (User::create($inputs)) {
            return response()->json(['msg' => 'User saved successfully.'], 200);
        }
        return response()->json(['msg' => 'Failed to save user please try again.'], 500);
    }
}
