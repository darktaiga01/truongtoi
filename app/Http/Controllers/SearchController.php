<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Location;
use App\Major;
use App\University;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(REQUEST $request)
    {
        $query = $request->get('keyword');
        $posts = Post::where('title','LIKE','%' . $query . '%')->get();
        $universities = University::where('title','LIKE','%' . $query . '%')->get();
        $categories = Category::all();
        $majors = Major::All();
        $locations = Location::all();
        return view('search', compact('posts','query', 'categories', 'locations', 'universities', 'majors'));
    }

    // public function advancedSearch(REQUEST $request)
    // {
    //     $query = $request->input('title');
    //     $category = $request->get('category_id');
    //     $location = $request->get('location_id');
    //     $avg_mark = $request->get('avg_mark');
    //     $posts = POST::where([
    //         ['title','LIKE',"%$query%"],
    //         ['category_id','=',$category],
    //         ['location_id','=',$location],
    //         ['avg_mark','<=', $avg_mark]
    //     ])->get();

    //     $categories = Category::all();
    //     $locations = Location::all();
    //     return view('search', compact('posts', 'query', 'category', 'location', 'avg_mark', 'categories', 'locations'));
    // }
}
