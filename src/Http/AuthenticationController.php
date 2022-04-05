<?php

namespace Charleskoko\SanctumAuthentication\Http;

use App\Http\Controllers\Controller;
use App\Models\User;
use Charleskoko\SanctumAuthentication\Traits\ApiResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends Controller
{
    use ApiResponse;

    public function register(Request $request)
    {

        $validatedData = $request->validate(config('sanctumAuthentication.user_registration_validation_array'));
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        $token = $user->createToken($user->id)->plainTextToken;

        return $this->success(['user' => $user, 'token' => $token], 'user successfully created', 201);

    }

    public function login(Request $request)
    {
        $validatedData = $request->validate(config('sanctumAuthentication.user_login_validation_array'));

        if (!Auth::attempt($validatedData)) {
            return $this->error(401, [], 'Unauthorized');
        }

        $user = User::all()->where(config('sanctumAuthentication.login_attribute'), $validatedData[config('sanctumAuthentication.login_attribute')])->first();

        if (!Hash::check($validatedData['password'], $user->password, [])) {
            throw new \Exception('Error in Login');
        }

        return $this->success([
            'token' => $user->createToken('authToken')->plainTextToken,
            'user' => $user,
        ], 'user successfully logged in', 201);

    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return $this->success([], 'Token successfully deleted',);
    }
}
