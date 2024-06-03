<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proposalcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[proposalcontroller::class,'index'])->name('proposals.index');
Route::get('proposals/create',[proposalcontroller::class,'create'])->name('proposals.create');
Route::post('proposals/store',[proposalcontroller::class,'store'])->name('proposals.store');
Route::get('proposals/{id}/edit',[proposalcontroller::class,'edit']);
Route::put('proposals/{id}/update',[proposalcontroller::class,'update']);
Route::get('proposals/{id}/delete',[proposalcontroller::class,'distroy']);
