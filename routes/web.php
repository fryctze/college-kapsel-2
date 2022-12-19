<?php

use App\Http\Controllers\IndexController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[ IndexController::class, 'index'])->name('index');
Route::get('dataSource',[ IndexController::class, 'dataSource'])->name('source');
Route::get('getDataSource', [ IndexController::class, 'dataSourcePost'])->name('source-post');


Route::get('getRatingAll', [ IndexController::class, 'dataRatingAll']);
Route::get('getRatingByStudio', [ IndexController::class, 'dataRatingByStudio']);

Route::get('getStudioMember', [ IndexController::class, 'studioMember']);
Route::get('getStudioMemberByRating', [ IndexController::class, 'studioMemberByRating']);

Route::get('studioScore', [ IndexController::class, 'studioScore']);
Route::get('studioScoreByRating', [ IndexController::class, 'studioScoreByRating']);

