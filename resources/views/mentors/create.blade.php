@extends('app')
@section('content')
    <h1>Create Mentor</h1>
    
     {!! Form::open(['url' => 'mentors']) !!}
     <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qualification', 'Qualification') !!}
        {!! Form::text('qualification',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Zip', 'Zip:') !!}
        {!! Form::text('zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

   <!-- <form class="form-horizontal" action="mentors">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control" name="">
  </div>
<div class="form-group">
    <label for="qualification">Qualification:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="zip">Zip:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" name="">
  </div>
 
  <a href="{{url('/mentors/store')}}" class="btn btn-success">Save</a>
  </div> -->
   
@stop
