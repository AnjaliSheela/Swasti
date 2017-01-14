<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use App\Status;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function status(){
      $status= Status::orderBy('id','desc')->get();
      return view('updates')->withStatus($status);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courses = courses::get();
      return view('home')->withCourses($courses);
    }
}
