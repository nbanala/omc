@extends('app')
@section('content')
    <h1>Update</h1>
    {!! Form::model($student,['method' => 'PATCH','route'=>['students.update',$student->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id', 'ID') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('class', 'Class:') !!}
        {!! Form::text('class',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Zip', 'Zip:') !!}
        {!! Form::text('Zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('Email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cell_phone', 'Phone:') !!}
        {!! Form::text('Cell_Phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
	
    {!! Form::close() !!}
@stop