<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Quran;
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


Route:: get("/",[Quran::class, "getsurahdata"]);
Route:: get("read/{surahnumber}",[Quran::class, "getreaddata"]);
