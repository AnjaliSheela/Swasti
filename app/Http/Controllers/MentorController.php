<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class MentorController extends Controller
{
  public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('admin');
     }
    public function index()
    {
        return view('Mentor.index');
    }
    public function status(Request $request){
      // validate the data
     $this->validate($request, array(
             'status'        => 'required',
         ));
     // store in the database
     $status = new Status;
     $status->status = $request->status;
     $status->save();
      return redirect()->back();
    }
}
