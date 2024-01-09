<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;  //this is the namespace we used. It has to be called here. 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

| This is where we can load our views and controller. 
*/
//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])-> middleware('auth');
//Middleware limites access for non account holders

//post request or store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
 
//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');      
//listings/{listing}:this will be the end point and the method we want is edit.

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/create form 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//Through web address or domain,guest cannot access the webiste with the "guest" Middleware

//Create new Users 
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', [UserController::class, 
'authenticate']);

