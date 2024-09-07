<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MiController@index')->name('crud.index');
Route::get('/create','App\Http\Controllers\MiController@create')->name('crud.create');
Route::post('/store/{id}','App\Http\Controllers\MiController@store')->name('crud.store');
Route::get('/update/{id}','App\Http\Controllers\MiController@update')->name('crud.update');
Route::post('/storeUpdate/{id}','App\Http\Controllers\MiController@storeUpdate')->name('crud.storeUpdate');
Route::get('/delete/{id}','App\Http\Controllers\MiController@delete')->name('crud.delete');
Route::get('indexProducto/{id}','App\Http\Controllers\MiController@indexProducto')->name('crud.indexProducto');
Route::get('/createProducto','App\Http\Controllers\MiController@createProducto')->name('crud.createProducto');
Route::post('/storeProducto','App\Http\Controllers\MiController@storeProducto')->name('crud.storeProducto');
Route::get('/updateProducto{id}','App\Http\Controllers\MiController@updateProducto')->name('crud.updateProducto');
Route::post('/storeUpdateProducto/{id}','App\Http\Controllers\MiController@storeUpdateProducto')->name('crud.storeUpdateProducto');
Route::get('/deleteProducto/{id}','App\Http\Controllers\MiController@deleteProducto')->name('crud.deleteProducto');
