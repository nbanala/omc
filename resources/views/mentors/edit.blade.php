@extends('app')
@section('content')
    <h1>Update</h1>
    {!! Form::model($mentor,['method' => 'PATCH','route'=>['mentors.update',$mentor->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qualification', 'Qualification') !!}
        {!! Form::text('qualification',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('Address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zip', 'Zip:') !!}
        {!! Form::text('Zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('Email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('Phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
	
    {!! Form::close() !!}
@stop

   
