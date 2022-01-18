<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (request('change_language')) {
        //     session()->put('language', request('change_language'));
        //     $language = request('change_language');
        // } elseif (session('language')) {
        //     $language = session('language');
        // } elseif (config('app.locale')) {
        //     $language = config('app.locale');
        // }

        // if (isset($language) && config('app.languages.' . $language)) {
        //     app()->setLocale($language);
        // }

        // dd($request);

        if (in_array(request('change_language'), Config::get('app.available_locales'))) {
            // Session::put('applocale', request('change_language'));
            App::setLocale(request('change_language'));
        }

        // if (Session()->has('applocale') && in_array(Session()->get('applocale'), config('app.available_locales'))) {
        //     App::setLocale(Session()->get('applocale'));
        // } else {
        //     App::setLocale(config('app.fallback_locale'));
        // }

        // ddd(App::getLocale());

        return $next($request);
    }
}
