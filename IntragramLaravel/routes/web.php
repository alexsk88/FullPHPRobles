<?php

use App\Image;

// Route::get('/', function () 
// {
//     $images = Image::all();

//     // foreach ($images as $image => $value) {
        
//     //     echo $value->image_path;
//     //     echo '<br>';
//     //     echo $value->user->name;
      
//     //     echo '<br>';
//     //     foreach ($value->comments as $key) {
//     //         echo $key->content;
      
//     //         echo '<br>';
//     //     }
//     // }
//     // die();
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');

Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::post('/updateuser', 'UserController@update')->name('updateuser');


