<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){

          $this->middleware('auth');
          $this->middleware('root');

    }


public function index()
{
  $users=User::paginate(10);
  return view('Admin.index')->withUsers($users);
}

public function addmentor($id)
{

    $mentor = User::find($id);
    $mentor->role=1;
    $mentor->save();
    return redirect()->back();
}
public function RemoveUser($id){

  $user= User::find($id);
  $user->delete();
  return redirect()->back();
}

}
