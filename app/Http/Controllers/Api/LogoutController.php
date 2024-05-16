<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\JWTExpiredException;
use Tymon\JWTAuth\Exceptions\JWTInvalidException;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if($removeToken){
            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!'
            ]);
        }
    }
}