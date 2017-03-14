@extends('layouts.app')

@section('content')
    <h1 align="center"> Omaha Mentoring for Kids</h1>

    <hr>
    <table class="table table-striped table-bordered table-hover">
    <a href="{{url('/addcomments/create')}}" class="btn btn-success"> Insert Comment</a></br></br>
        <thead>
        <tr class="bg-info">
      		<th>ID</th>
            <th>Mentor</th>
			<th>Student</th>
            <th>Comment</th>
			<th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($addcomments as $addcomment)
            <tr>
				<td>{{ $addcomment->id}}</td>
                <td>{{ $addcomment->mentor_id }}</td>
                <td>{{ $addcomment->student_id }}</td>
                <td>{{ $addcomment->comment}}</td>
				<td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['addcomments.destroy', $addcomment->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

