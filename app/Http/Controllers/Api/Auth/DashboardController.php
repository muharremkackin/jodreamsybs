<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{
    const HTTP_OK = Response::HTTP_OK;
    const HTTP_CREATED = Response::HTTP_CREATED;
    const HTTP_UNAUTHORIZED = Response::HTTP_UNAUTHORIZED;

    public function login(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $validate = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if ($validate->fails()) {
            return \response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], self::HTTP_UNAUTHORIZED);
        }
        $personal = Personal::where('email', '=', $credentials['email'])->first();
        if (!$personal) {
            return \response()->json(['email' => 'Sisteme bu e-posta kayıtlı değil.'], self::HTTP_UNAUTHORIZED);
        }
        if (!Hash::check($credentials['password'], $personal->password)) {
            return \response()->json(['password' => 'Hatalı şifre girdiniz.'], self::HTTP_UNAUTHORIZED);
        }
        return \response()->json(['status' => 'success', 'token' => $personal->createToken('PersonalToken')->accessToken], self::HTTP_OK);
    }

    public function details() {
        $user = auth()->guard('dashboard')->user();
        if ($user) {
            return \response()->json([
               'status' => 'success',
               'data' => $user
            ], self::HTTP_OK);
        }
        return \response()->json([
            'status' => 'error',
        ], self::HTTP_UNAUTHORIZED);
    }
}
