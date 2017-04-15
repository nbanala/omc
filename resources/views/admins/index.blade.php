@extends('layouts.app')

@section('content')

<!-- This sets the background image -->
<!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>

<h1 align="center"> <a href="http://localhost/omc2/public/home" style="font-size:30"> Omaha Mentoring for Kids</a></h1>

 <h2 align="center"><a href="{{url('/mentors/create')}}" style="font-size:30"> Create Mentor  </a>|
 <a href="{{url('/mentors')}}" style="font-size:30;"> View Mentor </a>|
 <a href="{{url('/students/create')}}" style="font-size:30;"> Create Student </a>|
 <a href="{{url('/students')}}" style="font-size:30;"> View Student </a>|
 <a href="{{url('/staffs')}}" style="font-size:30;"> View Staff </a>|
 <a href="{{url('/reports/show')}}" style="font-size:30;"> View Reports </a></br></br>
  
 </h2> 

    <!--<hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Zip</th>
            <th>Cell Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->id}}</td>
                <td>{{ $admin->name }}</td>
				<td>{{ $admin->email}}</td>
                <td>{{ $admin->address }}</td>
                <td>{{ $admin->zip }}</td>
                <td>{{ $admin->cell_phone }}</td>
                <td><a href="{{url('admins',$admin->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('admins.edit',$admin->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['admins.destroy', $admin->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>-->
      
@endsection
