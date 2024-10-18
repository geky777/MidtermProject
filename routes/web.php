<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* Age Verification Form (GET) */
Route::get('/ageverification', function () {
    return view('ageverification');
});

/* Handle Age Verification (POST) */
Route::post('/ageverification', function (Request $request) {
    $age = $request->input('age');

    if ($age >= 18) {
        $request->session()->put('age_verified', true); // Store in session
        return redirect('/Cv'); // Redirect via GET to /Cv
    } else {
        return redirect('/ageverification')
               ->with('error', 'You must be at least 18 years old to access this page.');
    }
});

/* CV Route (GET only) */
Route::get('/Cv', function () {
    return view('Cv'); // Ensure Cv.blade.php exists in your views folder
})->middleware('age.verification'); // Middleware applied to protect access


Route::get('/Content', function () {
     return view('Content'); 
    });
Route::get('/About', function () { 
    return view('About'); 
});
Route::get('/', function () { 
    return view('Home'); 
});

