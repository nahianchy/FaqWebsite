<?php

use Illuminate\Support\Facades\Route;





use App\Http\Controllers\Backend\PageController;

Use App\Http\Controllers\Backend\TaskController;






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



Route::group(['prefix' => 'admin'],function(){

    Route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');

    Route::group(['prefix' => 'myTask'],function(){

        //manage
        Route::get('/manage',[TaskController::class,'index'])->name('task.manage');
        //create and store
        Route::get('/create',[TaskController::class,'create'])->name('task.create');
        Route::post('/store',[TaskController::class,'store'])->name('task.store');
        
        //Edit and Update

        Route::get('/edit/{id}',[TaskController::class,'edit'])->name('task.edit');
        Route::post('/update/{id}',[TaskController::class,'update'])->name('task.update');


        //Delete

        Route::post('/destroy/{id}',[TaskController::class,'destroy'])->name('task.destroy');

    });
});


Route::get('/template',function(){
    view('template');
});



 



