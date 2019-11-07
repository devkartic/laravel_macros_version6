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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;


Route::get('/', function () {
    dd(Str::partNumber(123456789));
    dd(Str::prefix(123456789, 'XYZ-'));
    return Response::errorJson('A huge error found! Boom');
    return view('welcome');
});
