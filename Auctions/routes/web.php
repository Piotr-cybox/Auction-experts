<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(ApiController::class)->group(function() {
    Route::get('/auctions', 'showAuctions')->name('show.auctions');
    Route::get('/auctions/{id}', 'showByAuction')->name('show.auction');


});

