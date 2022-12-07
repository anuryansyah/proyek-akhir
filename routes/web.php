<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Student;

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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('person/show/{name}', [PersonController::class, 'show']);


Route::get('person', 'PersonController@index')->name('person.index');
Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::post('/person/store', [PersonController::class, 'store'])->name('person.store');



Route::get('grade/{course}/{task}/{quiz}/{mid_term}/{final}', [StudentController::class, 'myCourse']);

Route::get('student/index', 'StudentController@index')->name('student.index');


Auth::routes();