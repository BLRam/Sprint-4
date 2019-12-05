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



route:: get("/", function(){
  return view ("home");
});
Route::post ('/', function(){
});

Route::get('/preguntas', function(){
  return view("Agregarpregunta");
});
Route::post('/preguntas', "preguntascontroller@APreguntas");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/jugar', function(){
  return view("jugar");
});


Route::get('/preguntasfrecuentes', function(){
  return view('preguntasfrecuentes');
});


Route::get('/registro', function(){
  return view('registro');
});

Route:: get('/log', function(){
  return view('log');
});
