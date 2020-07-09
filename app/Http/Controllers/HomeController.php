<?php

namespace App\Http\Controllers;
use App\Major;
use App\University;
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
        return view('index');
    }

    public function showMajorList($id)
    {
        $majors = Major::where('id', $id)->get();
        $universities = University::where('major_id', $id)->get();
        $id_ = $id;
        return view('categories.view', compact('universities', 'majors', 'id_'));
    }
}
