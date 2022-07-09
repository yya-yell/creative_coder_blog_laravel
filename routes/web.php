<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminBlogController;

Route::get('/', [BlogController::class , 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class , 'show'])->where('slug', '[A-z\d\-_]+');
Route::post('/blog/{blog:slug}/comment', [CommentController::class , 'create']);
Route::post('/blog/{blog:slug}/subscribtion', [BlogController::class , 'subscribtion']);


Route::get('/register' , [AuthController::class , 'create'])->middleware('guest');
Route::post('/register' , [AuthController::class , 'store'])->middleware('guest');
Route::get('/login' , [AuthController::class , 'login'])->middleware('guest');
Route::post('/login' , [AuthController::class , 'login_store'])->middleware('guest');

Route::post('/logout' , [AuthController::class , 'logout'])->middleware('auth');


//admin routes
Route::get('/admin/blog/create' , [BlogController::class , 'create'])->middleware('is_admin');
Route::get('/admin/blogs' , [AdminBlogController::class , 'index'])->middleware('is_admin');
Route::post('/admin/blog/create' , [BlogController::class , 'store'])->middleware('is_admin');
Route::delete('/admin/blog/{blog:slug}/detete' , [AdminBlogController::class , 'destroy'])->middleware('is_admin');


