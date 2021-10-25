<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainVoting;
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

Route::get('/',[MainVoting::class,'voting'])->name('user.voting');

Route::get('/profile',[MainVoting::class,'profile'])->name('user.profile');

Route::get('/detail',[MainVoting::class,'detail'])->name('user.detail');

Route::get('/setting',[MainVoting::class,'setting'])->name('user.setting');

Route::get('/about-us',[MainVoting::class,'aboutus'])->name('user.about-us');

Route::get('/admin',[MainVoting::class,'admin'])->name('admin.admin');

Route::get('/addCandidate/candidateform',[MainVoting::class,'candidateform'])->name('addCandidate.candidateform');

Route::post('/addCandidate/save',[MainVoting::class,'save'])->name('addCandidate.save');

Route::get('/add/{id}',[MainVoting::class,'add'])->name('add');

Route::get('/check',[MainVoting::class,'check'])->name('user.check'); 
