@extends('layouts.app')
<head>

</head>
@section('content')
<style>
.content {
    text-align: center;
}
.title {
    font-size: 6vw;
}
.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Admin Dashboard
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              {!! Form::open(array('route' => 'status.update')) !!}
              {{ Form::label('status','Status:')}}
              {{ Form::textarea('status',null,array('class'=> 'form-control','required' => '','style'=>'height:100px;'))}}
              {{ Form::submit('Update Status',array('class'=>'btn btn-success','style' =>'margin-top:20px;'))}}
              {!! Form::close() !!}

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
              <table class="table table-striped">
   <thead>
     <tr>
       <th>#id</th>
       <th>Name</th>
       <th>Role</th>
       <th>Make Mentor</th>
       <th>Remove User</th>

     </tr>
   </thead>
   <tbody>
     @foreach($users as $user)

     <tr>
       <td>{{$user->id}}</td>
       <td>{{$user->name}}</td>
       @if($user->role==0)
       <td><span class="label label-success">STUDENT</span></td>
       @elseif($user->role==1)
       <td><span class="label label-warning">MENTOR</span></td>
       @else
       <td><span class="label label-danger">ADMIN</span></td>
       @endif
       <td>
         @if(!$user->role==2)
       <form method="POST" action="addMentor/{{$user->id}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="btn btn-success" value="Make Mentor">
       </form>
       @endif
       </td>
       <td>
         @if(!($user->role == 2))
       <form method="POST" action="remove/{{$user->id}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="btn btn-danger" value="DELETE">
       </form>
       @endif
       </td>

     </tr>
     @endforeach

   </tbody>
 </table>
 {{$users->links()}}
            </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
