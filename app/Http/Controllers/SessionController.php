<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function ShowLogin()
	{
		return view('admin.login.login');
	}

	public function store(LoginRequest $request)
	{
		$attributes = $request->validated();

		if (Auth::attempt($attributes))
		{
			session()->put('success', 'welcome');

			return redirect(route('admin.movies'));
		}
		else
		{
			throw ValidationException::withMessages([
				'email'    => 'your provided credentials could not be found',
				'password' => 'password does not match',
			]);
		}
	}

	public function destroy()
	{
		Auth::logout();

		session()->put('success', 'bye');

		return redirect(route('homepage'));
	}
}
