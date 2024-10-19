<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::middleware('log.request')->group(function () {

    Route::get('/ageverification', function () {
        return view('ageverification');
    })->name('ageverification'); 

    Route::post('/ageverification', function (Request $request) {
        $age = $request->input('age');

        if ($age >= 18) {
            $request->session()->put('age_verified', true); 
            return redirect()->route('cv'); 
        } else {
            abort(404); 
        }
    });

    Route::get('/Cv', function () {
        return view('Cv');
    })->middleware('age.verification')->name('cv'); 

    Route::get('/Content', function () {
        return view('Content');
    })->name('content'); 

    Route::get('/back', function () {
        return view('back');
    })->name('back'); 

    Route::get('/About', function () {
        return view('About');
    })->name('about'); 

    Route::get('/', function () {
        return view('Home');
    })->name('home'); 

});
