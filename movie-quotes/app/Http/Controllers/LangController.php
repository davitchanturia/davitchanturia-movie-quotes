<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function change($lang)
    {
        // if (in_array($lang, Config::get('app.available_locales'))) {
        //     Session::put('applocale', $lang);
        // // }

        // if (in_array(request('change_language'), Config::get('app.available_locales'))) {
        //     Session::put('applocale', request('change_language'));
        //     // dd('dsa');
        // }

        // dd($lang);
        // dd(App::getLocale());
        // return redirect('/');

        // return redirect()->back();
    }
}
// dd(App::session()->get('applocal'));
