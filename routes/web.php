<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminTravelController;
use App\Http\Controllers\Admin\AdminDestinationController;
use App\Http\Controllers\Admin\AdminTouristController;
use App\Http\Controllers\Admin\AdminExtraController;
use App\Http\Controllers\Admin\AdminLanguageController;

//Route::get('/', function () {return view('welcome');});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('destinations', AdminDestinationController::class);
    Route::resource('extras', AdminExtraController::class);
    Route::resource('languages', AdminLanguageController::class);
    Route::resource('tourists', AdminTouristController::class);
    Route::resource('travels', AdminTravelController::class);

        });


