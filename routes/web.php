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
use App\student;
use App\candidate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('/home');
});
Route::get('login', function () {
	// $res = student::all();
    return view('login');
});

Route::post('loginqry','LoginController@loginqry');

Route::get('admin', function () {
	// $res = student::all();
    return view('admin');
});

Route::post('adminlog','AdminController@adminlog');

Route::get('admindash', function () {
	// $res = student::all();
    return view('admindash');
});

Route::get('addstu', function () {
	// $res = student::all();
    return view('addstu');
});

Route::post('addqry','LoginController@addqry');

Route::get('cndsel', function () {
	 $res = student::all();
    return view('cndsel',compact('res'));
});

Route::get('select/{id}','CandidateController@select');

Route::post('selectqry','CandidateController@selectqry');

Route::get('vote',function(){
	$shw = candidate::all();
	return view('vote',compact('shw'))->with('no',1);
});

Route::get('elect/{id}','CandidateController@elect');

Route::post('electqry','CandidateController@electqry');

Route::get('result',function(){
	$fnl = candidate::all();
	return view('result',compact('fnl'))->with('no',1);
});

Route::get('resulfa',function(){
	$fnl = candidate::all();
	return view('resulfa',compact('fnl'))->with('no',1);
});
Route::post('voteqry','AdminController@voteqry');
Route::post('lineqry','AdminController@lineqry');
Route::post('closeqry','AdminController@closeqry');
Route::post('openqry','AdminController@openqry');
Route::get('result/{date}','CandidateController@result');
Route::post('resultqry','CandidateController@resultqry');
Route::post('deleteqry','AdminController@deleteqry');
