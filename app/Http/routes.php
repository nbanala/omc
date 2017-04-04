<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('mentors','MentorController');
Route::resource('students','StudentController');
Route::resource('addcomments','AddcommentController');
Route::resource('staff','StaffController');
Route::resource('admins','AdminController');
Route::resource('meeting_schedules','MeetingScheduleController');
Route::resource('meeting_mentors','MeetingMentorsController');
Route::resource('student_details','StudentDetailsController');
Route::resource('meeting_students','MeetingStudentsController');

Route::get('profile','UserController@profile');
Route::post('profile1','UserController@update_avatar');

Route::auth();

Route::get('/home', 'HomeController@index');
