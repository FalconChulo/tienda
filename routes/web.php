<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MiController@index')->name('crud.index');
Route::get('/create','App\Http\Controllers\MiController@create')->name('crud.create');
Route::post('/store/{id}','App\Http\Controllers\MiController@store')->name('crud.store');
Route::get('/update','App\Http\Controllers\MiController@update')->name('crud.update');
Route::get('/delete','App\Http\Controllers\MiController@delete')->name('crud.delete');
Route::get('indexProducto/{id}','App\Http\Controllers\MiController@indexProducto')->name('crud.indexProducto');
Route::get('/createProducto','App\Http\Controllers\MiController@createProducto')->name('crud.createProducto');
Route::post('/storeProducto','App\Http\Controllers\MiController@storeProducto')->name('crud.storeProducto');
Route::get('/updateProducto','App\Http\Controllers\MiController@updateProducto')->name('crud.updateProducto');
Route::get('/deleteProducto','App\Http\Controllers\MiController@deleteProducto')->name('crud.deleteProducto');
