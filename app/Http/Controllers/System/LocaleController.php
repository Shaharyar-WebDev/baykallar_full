<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    //
    public function setLocale(Request $request, $locale) {
    $request->session()->put('locale', $locale);
    $request->session()->save();
    return back();
}

}
