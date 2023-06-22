<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Post;
use App\Models\Achievement;

class PageController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        $a = Achievement::first();
        return view('front.index', compact('slides', 'posts', 'a'));
    }

    public function zakaz() {
        return view('front.zakaz');
    }

    public function achievements()
    {
        $a = Achievement::first();
        return view('admin.achievements', compact('a'));
    }

    public function achievementsUpdate(Request $request)
    {
        $a = Achievement::first();
        $a->clients = $request->clients;
        $a->km = $request->km;
        $a->shipped = $request->shipped;
        $a->staff = $request->staff;
        $a->save();
        return redirect()->route('achievements');
    }
}
