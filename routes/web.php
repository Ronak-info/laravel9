<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hello/{max?}/{min?}',function($max='',$min='18')
{
    return'<h1>Hello from Route</h1>'.$max.$min;
});

Route::get('/helloview',function()
{
    $name = "Ronak";
    $age = 18;
    $choice = 'blue1';
    $color = ['red','black',12,51,11,45.5,88.66];

     return view('hello',['sname'=>$name,
                           'age'=>$age,
                           'choice'=>$choice,
                           'color'=>$color,

    ]);
});

Route::get('/sayhello',[HelloController::class,'sayhello']);
