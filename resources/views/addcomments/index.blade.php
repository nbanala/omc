@extends('layouts.app')

@section('content')
    <h1 align="center"> Omaha Mentoring for Kids</h1>

    <hr>
    <table class="table table-striped table-bordered table-hover">
    <a href="{{url('/addcomments/create')}}" class="btn btn-success"> Insert Comment</a></br></br>
        <thead>
        <tr class="bg-info">
      		<th>ID</th>
            <th>mentor_id</th>
            <th>student_id</th>
            <th>comment</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($addcomments as $addcomment)
            <tr>
				<td>{{ $addcomment->id}}</td>
                <td>{{ $addcomment->mentor_id }}</td>
                <td>{{ $addcomment->student_id }}</td>
                <td>{{ $addcomment->comment}}</td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

