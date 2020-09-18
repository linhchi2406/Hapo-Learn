<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');

Auth::routes();
Route::get('/list-course', 'CourseController@index')->name('list_course');
Route::get('/list-course/{id}', 'CourseController@show')->name('course_detail');
Route::get('/list-course/{courseId}/{lessonId}', 'LessonController@show')->name('lesson_detail');
Route::post('take-course/{id}', 'CourseController@takeCourse')->name('take_course');
Route::post('leave-course/{id}', 'CourseController@leaveCourse')->name('leave_ourse');