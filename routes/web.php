<?php

use App\Http\Controllers\BlogContoller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blogs', [BlogContoller::class, 'index']);
Route::get('edit', [BlogContoller::class, 'editPages']);
Route::get('detail/{id}', [BlogContoller::class, 'show']);
Route::get('create', [BlogContoller::class, 'create']);
Route::post('blogs', [BlogContoller::class, 'store']);
Route::delete('edit/{id}', [BlogContoller::class, 'destroy']);
Route::post('edit/{id}/update', [BlogContoller::class, 'edit']);
Route::patch('edit/{id}', [BlogContoller::class, 'update']);
Route::post('comment/{id}', [BlogContoller::class, 'createComent']);
