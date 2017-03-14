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
@stop

   
