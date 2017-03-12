@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
<h2 align="center"> <a href="http://omk.herokuapp.com/mentors" style="font-size:75"> Mentor  </a> | <a href="http://omk.herokuapp.com/students" style="font-size:75;">Student </a> | <a href="http://omk.herokuapp.com/staffs" style="font-size:75;">  Staff </a> | <a href="http://omk.herokuapp.com/admins" style="font-size:75;"> Admin </a> </h2>        

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection