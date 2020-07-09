<?php

namespace App\Http\Controllers;
use App\Major;
use App\University;
use App\Location;
use Illuminate\Http\Request;

class UniversityController extends Controller
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
        $universities = University::all();
        return view('university.list', compact('universities','universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $majors = Major::all();
        $location = Location::all();
        return view('university.create')->withMajors($majors)->withLocation($location);  
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
            'major_id' => 'required',
            'avg_mark' => 'required',
            'location_id' => 'required'
        ]);

        // Lưu trữ ở data
        $university = new University([
            'title' => $request->get('txtTitle'),
            'feature_img' => $request->get('txtImg'),
            'body' => $request->get('txtBody'),
            'major_id' => $request->get('major_id'),
            'avg_mark' => $request->get('avg_mark'),
            'location_id' => $request->get('location_id')
        ]);


        // Lưu lại, chuyển về trang cũ
        $university->save();
        return redirect('/admin/university')->with('success', 'Post has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        //
        return view('university.view', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        //
        $majors = Major::all();
        $location = Location::all();
        return view('university.edit', compact('university', 'majors', 'location'));
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
            'major_id' => 'required',
            'avg_mark' => 'required',
            'location_id' => 'required'
        ]);

        $university = University::find($id);
        
        $university->title = $request->get('txtTitle');
        $university->feature_img = $request->get('txtImg');
        $university->body = $request->get('txtBody');
        $university->major_id = $request->get('major_id');
        $university->avg_mark = $request->get('avg_mark');
        $university->location_id = $request->get('location_id');
        $university->update();
        return redirect('/admin/university')->with('success', 'Post updated successfully');
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
        University::where('id', $id)->delete();
        return redirect('admin/university')->with('success', 'Post deleted successfully');
    }
}
