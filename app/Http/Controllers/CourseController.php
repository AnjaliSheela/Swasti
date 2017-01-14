<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;

class CourseController extends Controller
{
  public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('admin')->only('create');
     }
    public function index()
    {
        $courses = courses::get();
        return view('courses.index')->withCourses($courses);
    }
    public function create()
    {
        return view('courses.add');
    }
    public function show($id){
      switch ($id){

        case 2:return redirect('/csharp/cshome.html'); break;
        case 4:return redirect('/java/javahome.html'); break;
      }
    }
    public function store(Request $request)
       {
           // validate the data
          $this->validate($request, array(
                  'name'          => 'required|max:255',
                  'description'        => 'required',
              ));
          // store in the database
          $courses = new courses;
          $courses->name = $request->name;
          $courses->description = $request->description;
          $courses->save();
          return redirect()->route('courses.index');
       }
}
