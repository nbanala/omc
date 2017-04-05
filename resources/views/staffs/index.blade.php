@extends('layouts.app')

@section('content')
    <h1 align="center"> <a href="http://localhost/omc2/public/home" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    <!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>
    <h2 align="left"><a href="{{ action('MentorController@index') }}" style="font-size:30"> Mentors  </a>|
    <a href="{{ action('StudentController@index') }}" style="font-size:30"> Students  </a>|
    <a href="{{ action('MeetingScheduleController@index') }}" style="font-size:30;">Meeting Schedule </a>|
    <a href=""> Reports </a>|
    <!-- <a href="http://omk.com/staff/settings" style="font-size:30;"> Settings </a></br></br> -->
	<!-- <a href="{{url('/staffs/create')}}" class="btn btn-success"> Create Staff</a> -->
	  
 <!-- </h2> 

    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Name</th>
			<th>ID</th>
            <th>Address</th>
            <th>Zip</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="1">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($staffs as $staff)
            <tr>
                <td>{{ $staff->name }}</td>
				<td>{{ $staff->id}}</td>
                <td>{{ $staff->address }}</td>
                <td>{{ $staff->zip }}</td>
                <td>{{ $staff->email}}</td>
                <td>{{ $staff->cell_phone }}</td>
                <td><a href="{{route('staffs.edit',$staff->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['staffs.destroy', $staff->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
 -->
    <!-- </table> -->
      
@endsection
