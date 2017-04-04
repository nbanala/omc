@extends('layouts.app')

@section('content')
    <h1 align="center"> <a href="{{action ('StudentController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    <!DOCTYPE html>
    <body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
<html>
</body>
</html>
@if (Auth::user()->role==='student')
    <h2 align="left"><a href="{{ action('MeetingStudentsController@index') }}" style="font-size:30"> Meeting Schedule </a>|<a href="http://omk.com/Students/notifications" style="font-size:30;"> Notifications </a>|
    <!-- <a href="http://omk.com/Students/settings" style="font-size:30;"> Settings </a></br></br> -->
    <br></br>
	<a href="{{url('/students/create')}}" class="btn btn-success"> Create Student</a>
	  
 </h2> 
@endif
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Name</th>
			<th>ID</th>
            <th>Class</th>
            <th>Address</th>
            <th>Zip</th>
            <th>Email</th>
            <th>Cell_Phone</th>
            <th colspan="1">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
				<td>{{ $student->id}}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->zip }}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->cell_phone }}</td>
                <td><a href="{{route('students.edit',$student->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['students.destroy', $student->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection
