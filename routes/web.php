<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('sign-in/google', [SocialAuthController::class, 'googleLogin'])->name('signingoogle');
Route::get('sign-in/google/redirect', [SocialAuthController::class, 'googleRedirect'])->name('signingoogleredirect');

Route::get('sign-in/facebook', [SocialAuthController::class, 'facebookLogin'])->name('signinfacebook');
Route::get('sign-in/facebook/redirect', [SocialAuthController::class, 'facebookRedirect'])->name('signinfacebookredirect');

require __DIR__.'/auth.php';
