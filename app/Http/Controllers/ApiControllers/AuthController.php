<?php

namespace App\Http\Controllers\ApiControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$attrs = $request->validate([
			'email'    => 'required',
			'password' => 'required',
		]);

		if (Auth::attempt($attrs))
		{
			return response(204);
		}

		return response(404);
	}

	public function logout(Request $request)
	{
		Auth::logout();

		return response(200);
	}

	public function checkAuth()
	{
		if (Auth::check())
		{
			return response()->json(['isLoggedIn' => 'true']);
		}
		else
		{
			return response()->json(['isLoggedIn' => 'false']);
		}
	}
}
