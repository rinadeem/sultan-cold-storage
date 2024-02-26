<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('master');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/deedindex', function () {
    return view('pages.deeds.deed');
});
Route::get('/deedcreate', function () {
    return view('pages.deeds.deedCreate');
});
Route::get('/precooling', function () {
    return view('pages.precooling_request.precoolingRequestCreate');
});
Route::get('/shade', function () {
    return view('pages.shade.shadeCreate');
});

Route::get('/gate', function () {
    return view('pages.gatePass.gatePassCreate');
});
Route::get('/moneyrecipt', function () {
    return view('pages.moneyRecipt.moneyReciptCreate');
});
Route::get('/loan', function () {
    return view('pages.loan.loanCreate');
});
Route::get('/location', function () {
    return view('pages.locationAssigningCreate');
});
Route::get('/ownership', function () {
    return view('pages.ownershipCreate');
});
Route::get('/inventory', function () {
    return view('pages.inventoryCreate');
});