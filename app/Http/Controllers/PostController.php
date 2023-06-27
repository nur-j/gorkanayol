<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts', compact('posts'));
    }

    public function front_index()
    {
        $posts = Post::paginate(10);
        return view('front.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_tm' => 'required',
            'text_tm' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
            'title_tr' => 'required',
            'text_tr' => 'required',
            'poster' => 'required'
        ]);
        
        $post = new Post;
        $post->title_tm = $request->title_tm;
        $post->text_tm = $request->text_tm;
        $post->title_ru = $request->title_ru;
        $post->text_ru = $request->text_ru;
        $post->title_en = $request->title_en;
        $post->text_en = $request->text_en;
        $post->title_tr = $request->title_tr;
        $post->text_tr = $request->text_tr;
        $post->category_id = $request->category_id;
        $post->created_at = $request->created_at;

        if ($request->hasFile('poster')) {
            $path = $request->poster->store('images');
        } else {
            $path = null;
        }
        
        $post->poster = $path;
        
        $post->save();

        return redirect()->back()->withSuccess('Täzelik döredildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function front_show($id)
    {
        $post = Post::find($id);
        return view('front.post_single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.post_edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title_tm = $request->title_tm;
        $post->text_tm = $request->text_tm;
        $post->title_ru = $request->title_ru;
        $post->text_ru = $request->text_ru;
        $post->title_en = $request->title_en;
        $post->text_en = $request->text_en;
        $post->title_tr = 'tr';
        $post->text_tr = 'tr';
        $post->category_id = $request->category_id;

        $post->category_id = $request->category_id;
        $post->created_at = $request->created_at;

        if ($request->hasFile('poster')) {
            $path = $request->poster->store('images');
        } else {
            $path = $post->poster;
        }

        $post->poster = $path;
        $post->save();

        return redirect()->back()->withSuccess('Täzelik üýtgedildi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back()->with('success', 'Пост был успешно удален');
    }
}
