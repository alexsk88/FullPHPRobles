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

Auth::routes();// Esta ruta me crea el login y registro
Route::get('/', 'HomeController@index')->name('home');

/*Rutas de Usuario*/
Route::get('/configuracion', 'UserController@config')->name('config');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::post('/updateuser', 'UserController@update')->name('updateuser');

/*Rutas de Imagen */
Route::get('/images/create', 'ImageController@create')->name('image.create');
Route::post('/images/save', 'ImageController@saveImg')->name('saveimg');
Route::get('/imagen/userimagen/{filename}', 'ImageController@getImage')->name('image.user');
Route::get('/imagen/{id}', 'ImageController@detail')->name('image.detail');


