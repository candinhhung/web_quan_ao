<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('product','ProductController')->except(['edit','create']);
Route::resource('category','CategoryController')->except(['edit','create']);
Route::resource('bill','BillController')->except(['edit','create']);
Route::get('/product/show_by_category/{category}','ProductController@show_by_category');
