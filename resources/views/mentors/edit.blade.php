@extends('app')
@section('content')
    <h1>Update</h1>
    {!! Form::model($mentor,['method' => 'PATCH','route'=>['mentors.update',$mentor->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id', 'ID') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qualification', 'Qualification') !!}
        {!! Form::text('qualification',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('Address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Zip', 'State:') !!}
        {!! Form::text('Zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Zip:') !!}
        {!! Form::text('Email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Primary Email:') !!}
        {!! Form::text('Phone',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

   
