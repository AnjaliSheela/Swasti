@extends('layouts.app')
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            Add Course
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    {!! Form::open(array('route' => 'courses.store')) !!}
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('description','Description:')}}
                    {{ Form::textarea('description',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::submit('Create Course',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/courses') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
