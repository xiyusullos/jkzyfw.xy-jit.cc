<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::any('/login', [
    'as' => '/login',
    'uses' => 'UserController@login'
]);

Route::any('/logout', [
    'as' => '/logout',
    'uses' => 'UserController@logout'
]);

Route::any('/tasks', 'TaskController@index');

Route::group([
        'prefix' => 'student',
        'middleware' => 'auth'
    ],function(){
        Route::get('/', [
            'as' => 'student.home', 
            'uses' => 'StudentController@index'
        ]);
    }
);

Route::group([
        'prefix' => 'teacher',
        'middleware' => 'auth'
    ],function(){
        Route::get('/', [
            'as' => 'teacher.home', 
            'uses' => 'TeacherController@index'
        ]);
        Route::get('/publish', [
            'as' => 'teacher.publish', 
            'uses' => 'TeacherController@publish'
        ]);
        Route::any('/myTasks', [
            'as' => 'teacher.myTasks', 
            'uses' => 'TaskController@index'
        ]);
        Route::any('/myTask', [
            'as' => 'teacher.myTask', 
            'uses' => 'TaskController@load'
        ]);
        Route::any('/aboutMe/{id}', [
            'as' => 'teacher.aboutMe', 
            'uses' => 'TeacherController@show'
        ]);
    }
);

Route::group([
        'prefix' => 'tasks',
        'middleware' => 'auth'
    ],function(){
        Route::get('/', [
            'as' => 'tasks',
            'uses' => 'TaskController@index'
        ]);

        Route::post('/', [
            'as' => 'tasks.store',
            'uses' => 'TaskController@store'
        ]);

        Route::get('/{id}', [
            'as' => 'tasks',
            'uses' => 'TaskController@show'
        ]);
        
        Route::post('/create', [
            'as' => 'tasks.create',
            'uses' => 'TaskController@create'
        ]);
    }
);