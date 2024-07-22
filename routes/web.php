<?php

use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test.tes');
});

//CALL Controller
Route::get('/hallocontrol',[HaloController::class, 'index']);

//Call Todo
Route::get('/todo',function(){
    return view('todo.app');
});
