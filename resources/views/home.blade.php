@extends('layouts.app')

@section('content')
    <h1 align="center"> Omaha Mentoring for Kids</h1>
    <a href="{{url('/mentors/create')}}" class="btn btn-success"> Create Mentor</a>

    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Name</th>
            <th>Qualification</th>
            <th>Address</th>
            <th>Zip</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Comments</th>
            <th colspan="1">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mentors as $mentor)
            <tr>
                <td>{{ $mentor->name }}</td>
                <td>{{ $mentor->qualification }}</td>
                <td>{{ $mentor->address }}</td>
                <td>{{ $mentor->zip }}</td>
                <td>{{ $mentor->email}}</td>
                <td>{{ $mentor->phone }}</td>
                <td>{{ $mentor->comment }}</td>
                <td><a href="{{route('mentors.edit',$mentor->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mentors.destroy', $mentor->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <h2 align="left"><a href="http://omk.com/Mentor/student details" style="font-size:30"> Student details  </a><br/> 
    <a href="http://omk.com/Mentor/meeting schedule" style="font-size:30;">Meeting Schedule </a><br/>   
    <a href="http://omk.com/Mentor/add meeting" style="font-size:30;"> Add Meeting </a> <br/> 
    <a href="http://omk.com/Mentor/notifications" style="font-size:30;"> Notifications </a> <br/> 
    <a href="http://omk.com/Mentor/settings" style="font-size:30;"> Settings </a>  
 </h2>   
@endsection
