<?php
use App\Events\EventMessage;
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
Route::get('/test-pusher', function () {
    event(new EventMessage);
    return 'Test Pusher';
//    return view('welcome');MessageController
});

Route::get('/send', 'MessageController@sendMessage')->name('send');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
