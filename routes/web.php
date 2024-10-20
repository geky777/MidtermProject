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
            return redirect()->route('back'); 
        } else {
            abort(404); 
        }
    });

    Route::get('/back', function () {
        return view('back');
    })->middleware('age.verification')->name('back'); 

    Route::get('/About', function () {
        return view('About');
    })->name('about'); 

    Route::get('/Lab1', function () {
        return view('Lab1');
    })->name('lab1'); 

    Route::get('/Lab2', function () {
        return view('Lab2');
    })->name('lab2'); 

    Route::get('/Lab3', function () {
        return view('Lab3');
    })->name('lab3'); 

    Route::get('/Lab4', function () {
        return view('Lab4');
    })->name('lab4'); 

    Route::get('/', function () {
        return view('Home');
    })->name('home'); 

});
