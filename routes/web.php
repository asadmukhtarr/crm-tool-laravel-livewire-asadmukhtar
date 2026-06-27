<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
// direct route ...
// Route::get('/services',function(){
//     return view('services');
// });
// Route::get('/',function(){
//     return view('welcome');
// });
// Route::get('/about',function(){
//     return view('about');
// })->name('about');
// Route::get('/contact',function(){
//     return view('contact');
// })->name('contact');
// indirect route through controller ...
Route::get('/',[pagesController::class,'home'])->name('home');
Route::get('/about',[pagesController::class,'about'])->name('about');
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
Route::get('/services',[pagesController::class,'services'])->name('services');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
