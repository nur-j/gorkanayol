<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        return view('front.index', compact('slides', 'posts'));
    }

    public function zakaz() {
        return view('front.zakaz');
    }
}
