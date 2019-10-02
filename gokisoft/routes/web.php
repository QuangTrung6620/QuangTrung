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
Route::post('/post-student',[
    'as'=>'post-student',
    'uses'=>'StudentController@addStudent'
]);
Route::get('/student_list',[
    'as'=>'student_list',
    'uses'=>'StudentController@showStudentList'
]);
Route::get('/input-student', function(){
    return view('input_student');
});
