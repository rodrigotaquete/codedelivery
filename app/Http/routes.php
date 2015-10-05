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

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware'=>'auth.checkrole'], function(){
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){

        Route::get('', ['as' => 'index', 'uses'=>'CategoriesController@index']);
        Route::get('create', ['as' => 'create', 'uses'=>'CategoriesController@create']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses'=>'CategoriesController@edit']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses'=>'CategoriesController@destroy']);

        Route::post('store', ['as' => 'store', 'uses'=>'CategoriesController@store']);
        Route::post('update/{id}', ['as' => 'update', 'uses'=>'CategoriesController@update']);

    });

    Route::group(['prefix' => 'products', 'as' => 'products.'], function(){

        Route::get('', ['as' => 'index', 'uses'=>'ProductsController@index']);
        Route::get('create', ['as' => 'create', 'uses'=>'ProductsController@create']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses'=>'ProductsController@edit']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses'=>'ProductsController@destroy']);

        Route::post('store', ['as' => 'store', 'uses'=>'ProductsController@store']);
        Route::post('update/{id}', ['as' => 'update', 'uses'=>'ProductsController@update']);

    });

    Route::group(['prefix' => 'clients', 'as' => 'clients.'], function(){

        Route::get('', ['as' => 'index', 'uses'=>'ClientsController@index']);
        Route::get('create', ['as' => 'create', 'uses'=>'ClientsController@create']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses'=>'ClientsController@edit']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses'=>'ClientsController@destroy']);

        Route::post('store', ['as' => 'store', 'uses'=>'ClientsController@store']);
        Route::post('update/{id}', ['as' => 'update', 'uses'=>'ClientsController@update']);

    });

    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function(){

        Route::get('', ['as' => 'index', 'uses'=>'OrdersController@index']);
        Route::get('details/{id}', ['as' => 'details', 'uses'=>'OrdersController@details']);
        Route::get('status/{id}', ['as' => 'status', 'uses'=>'OrdersController@status']);
        Route::get('deliveryman/{id}', ['as' => 'deliveryman', 'uses'=>'OrdersController@deliveryman']);

        Route::post('update/{id}', ['as' => 'update', 'uses'=>'OrdersController@update']);
    });
});
