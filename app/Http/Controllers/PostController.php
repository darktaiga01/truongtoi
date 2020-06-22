<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.list', compact('posts','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // xác thực data
        $request->validate([
            'txtTitle'=>'required',
            'txtImg' => 'required',
            'txtBody'=>'required'
        ]);

        // Lưu trữ ở data
        $post = new Post([
            'title' => $request->get('txtTitle'),
            'feature_img' => $request->get('txtImg'),
            'body' => $request->get('txtBody')
        ]);


        // Lưu lại, chuyển về trang cũ
        $post->save();
        return redirect('/posts')->with('success', 'Post has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(POST $post)
    {
        //
        return view('posts.edit', compact('post'));
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
        //
        $request->validate([
            'txtTitle' => 'required',
            'txtImg' => 'required',
            'txtBody' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->get('txtTitle');
        $post->feature_img = $request->get('txtImg');
        $post->body = $request->get('txtBody');

        $post->update();
        return redirect('/posts')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post->delete();
        return redirect('/post')->with('success', 'Post deleted successfully');
    }
}
