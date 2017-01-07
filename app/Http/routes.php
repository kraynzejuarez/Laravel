<?php

/*..*/

Route::group(['middleware' => ['web']], function (){
    Route::get('/', function (){
        return view('welcome');
    })->name ('home');

    Route:: post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
    ]);
    Route:: post('/signin', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signin'
]);
    Route::get('/dashboard', [
        'uses' => 'PostController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);

    Route::post('/createpost', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create'
    ]);
});