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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'FormController@index');
Route::get('/test', function () {
    return "questo è un test";
});

Route::get('/test_view', function () {
    return view("test_view")->with("someList", [
        ['id'=>'1', 'prop1'=>'value1','prop2'=>'value2'],
        ['id'=>'2', 'prop1'=>'value1','prop2'=>'value2'],
    ]);
});


Route::get('/mytest_ctrl', 'MyTestController@index');
Route::post('/form/submit', 'FormController@save')->name('form.save');
Route::get('/form', 'FormController@index');