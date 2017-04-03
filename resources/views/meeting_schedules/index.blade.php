@extends('layouts.app')

@section('content')
    <h1 align="center"> <a href="{{action ('StaffController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    <!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>
    <hr>
    <table class="table table-striped table-bordered table-hover">
    <a href="{{url('/meeting_schedules/create')}}" class="btn btn-success"> Add Meeting</a></br></br>
        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>mentor name</th>
            <th>student name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($meeting_schedules as $meeting_schedule)
            <tr>
                <td>{{ $meeting_schedule->id}}</td>
                <td>{{ $meeting_schedule->mentor_name }}</td>
                <td>{{ $meeting_schedule->student_name }}</td>
                <td>{{ $meeting_schedule->date}}</td>
                <td>{{ $meeting_schedule->time}}</td>
                <td>{{ $meeting_schedule->location}}</td>
                <td>
        {!! Form::open(['method' => 'DELETE', 'route'=>['meeting_schedules.destroy', $meeting_schedule->id]])!!}
         {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

