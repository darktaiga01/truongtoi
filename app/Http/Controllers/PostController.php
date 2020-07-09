<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Location;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => 'show']);
    }
    
    
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
        $categories = Category::all();
        $location = Location::all();
        return view('posts.create')->withCategories($categories)->withLocation($location);  
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
            'txtBody'=>'required',
            'category_id' => 'required',
            'avg_mark' => 'required',
            'location_id' => 'required'
        ]);

        // Lưu trữ ở data
        $post = new Post([
            'title' => $request->get('txtTitle'),
            'feature_img' => $request->get('txtImg'),
            'body' => $request->get('txtBody'),
            'category_id' => $request->get('category_id'),
            'avg_mark' => $request->get('avg_mark'),
            'location_id' => $request->get('location_id')
        ]);


        // Lưu lại, chuyển về trang cũ
        $post->save();
        return redirect('/admin/posts')->with('success', 'Post has been added');

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
        $categories = Category::all();
        $location = Location::all();
        return view('posts.edit', compact('post', 'categories', 'location'));
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
            'txtBody' => 'required',
            'category_id' => 'required',
            'avg_mark' => 'required',
            'location_id' => 'required'
        ]);

        $post = Post::find($id);
        
        $post->title = $request->get('txtTitle');
        $post->feature_img = $request->get('txtImg');
        $post->body = $request->get('txtBody');
        $post->category_id = $request->get('category_id');
        $post->avg_mark = $request->get('avg_mark');
        $post->location_id = $request->get('location_id');
        $post->update();
        return redirect('/admin/posts')->with('success', 'Post updated successfully');
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
        POST::where('id', $id)->delete();
        return redirect('admin/posts')->with('success', 'Post deleted successfully');
    }
}
