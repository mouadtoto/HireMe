<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/home'  , [HomeController::class , 'reroute'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware( 'auth' , 'Enterprise')->group(function () {
    Route::get('/profile/enterprise' , [EnterpriseController::class , 'index'])->name('profile.enterprise');
    Route::post('/profile/enterprise/confirm' , [EnterpriseController::class , 'store' ])->name('enterprise.confirm');
    Route::post('/enterprise/offer/create' , [EnterpriseController::class , 'storeOffer' ])->name('offer.create');
});

Route::middleware( 'auth' , 'Candidate')->group(function () {
    Route::get('profile/candidate/view' , [CandidateController::class , 'index'])->name('profile.candidate');
    Route::post('/profile/candidate' , [CandidateController::class , 'store'])->name('candidate.confirm');
    Route::post('/profile/candidate/cv' , [CandidateController::class , 'storeCv'])->name('cv.add');
});


require __DIR__.'/auth.php';
