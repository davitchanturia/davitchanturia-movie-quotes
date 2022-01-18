<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // ლოგინ ფეიჯი
    public function ShowLogin()
    {
        return view('admin.login.login');
    }

    //  დალოგინება
    public function store()
    {
        $attributes = Request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        // $user = User::where('email', request()->email)->first();
       
        // if ($user) {
        //     if (request()->password === $user->password) {
        //         request()->session()->put('logged', $user->id);

        //         return redirect(route('admin.movies'));
        //     }
        // }

        // dd($attributes);
        if (Auth::attempt($attributes)) {
            session()->put('success', 'welcome');
            
            return redirect(route('admin.movies'));
        } else {
            throw ValidationException::withMessages([
                'email' => 'your provided credentials could not be found',
                'password' => 'password does not match'
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
