<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(REQUEST $request)
    {
        $query = $request->input('keyword');
        $posts = Post::where('title','LIKE',"%$query%")->get();
        return view('search', compact('posts','query'));
    }

    
}
