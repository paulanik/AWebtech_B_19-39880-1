<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/cv',[pagesController::class,'cv']  );
Route::get('/experience', [pagesController::class,'experience'] );
Route::get('/ic', [pagesController::class,'ic'] );
Route::get('/ts', [pagesController::class,'ts'] );


//Route::get('/create',[StudentController::class,'create']);
Route::get('/create/create',[StudentController::class,'create'])->name('create');
Route::get('/list',[StudentController::class,'list'])->name('list');
Route::get('/get',[StudentController::class,'get']);
Route::get('/profile',[StudentController::class,'myprofile']);
Route::get('/education',[StudentController::class,'education']);

Route::get('/details/{id}/{name}',[StudentController::class,'details'])->name('details');

Route::get('/regis',[StudentController::class,'registration'])->name('registration');
Route::post('/AfterRegis',[StudentController::class,'AfterRegis'])->name('AfterRegis');

Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/editsubmit',[StudentController::class,'editsubmit'])->name('editsubmit');

Route::get('/delete/{id}',[StudentController::class,'delete'])->name('delete');


?>
