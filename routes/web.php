<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

Route::group(['prefix'=>'admin'], function() {

   Route::get('page/create', function() {
       echo 'create';
   });

});


Route::get('/{vue?}', function () {
    return view('welcome');
});

