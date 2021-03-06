<?php

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

Route::group(['prefix' => '/pusher'], function () {
    Route::get('/index', function () {
        return view('pusher-index');
    });

    Route::get('/hello-world', function () {
        event(new App\Events\MyEvent('hello world'));
        return ['message' => 'send to message : hello world'];
    });
});

Route::group(['prefix' => '/realtime-chart'], function () {
    Route::get('/', function () {
        return view('realtime-chart');
    });
});
