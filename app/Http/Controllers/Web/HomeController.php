<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Set the local lang into a cookie.
     *
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLocale($locale)
    {
        Cookie::queue(Cookie::make('locale', $locale, (60 * 24 * 30)));

        return back();
    }
}