<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function changeLang(Request $request) {
        $locale = $request->lang;
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
