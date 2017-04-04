<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('mentors','MentorController');
Route::resource('students','StudentController');
Route::resource('addcomments','AddcommentController');
Route::resource('staffs','StaffController');
Route::resource('admins','AdminController');
Route::resource('meeting_schedules','MeetingScheduleController');
Route::resource('meeting_mentors','MeetingMentorsController');
Route::resource('student_details','StudentDetailsController');
Route::resource('meeting_students','MeetingStudentsController');

Route::get('profile','UserController@profile');
Route::post('profile1','UserController@update_avatar');

Auth::routes();

