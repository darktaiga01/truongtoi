<?php

namespace App\Http\Controllers;
use App\Major;
use App\University;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(6)->get();
        return view('index', compact('posts'));
    }

    public function showMajorList($id)
    {
        $majors = Major::where('id', $id)->get();
        $universities = University::where('major_id', $id)->get();
        $id_ = $id;
        return view('categories.view', compact('universities', 'majors', 'id_'));
    }

    public function showMajorPostList($id)
    {
        $categories = Category::where('id', $id)->get();
        $posts = Post::where('category_id', $id)->get();
        $id_ = $id;
        return view('categories.display', compact('posts', 'categories', 'id_'));
    }
}
