<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StaticPagesController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/what-is-los-algodones', [StaticPagesController::class, 'whatIsLosAlgodones'])->name('whatIsLosAlgodones');
Route::get('/choosing-the-clinic', [StaticPagesController::class, 'choosingTheClinic'])->name('choosingTheClinic');
Route::get('/sample-price', [StaticPagesController::class, 'samplePrice'])->name('samplePrice');
Route::get('/treatments/{treatment}', [StaticPagesController::class, 'treatments'])->name('treatments');
Route::get('/gallery', [StaticPagesController::class, 'gallery'])->name('gallery');
Route::get('/testimonials', [StaticPagesController::class, 'testimonials'])->name('testimonials');

Route::post('/estimate', [FormController::class, 'estimate'])->name('estimateForm');