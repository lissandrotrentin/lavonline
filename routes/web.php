<?php

use App\Http\Controllers\ImagesWashingController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\WashingController;
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

//Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');

//Route::post('/addrees', [UserAddressController::class, 'addressStore'])->name('address.store')->middleware('auth');

//Route::get('/addreesform', [UserAddressController::class, 'addressform'])->name('address.form')->middleware('auth');

//Route::get('/washingform', [WashingController::class, 'washingform'])->name('washing.form');

//Route::get('/washingdashboard', [OwnerController::class, 'washingdashboard'])->name('owner.dashboard');

//Route::post('/ownerstore', [OwnerController::class, 'ownerstore'])->name('owner.store');

//Route::get('/ownerform', [OwnerController::class, 'ownersform'])->name('owner.form');

//Route::post('/washingstore', [WashingController::class, 'washingstore'])->name('washing.store');

//Route::post('/washingimagestore', [ImagesWashingController::class, 'washingImageStore'])->name('washing.image.store');

//Route::get('/ownerlogin', [OwnerController::class, 'ownerslogin'])->name('owner.login');

//Route::post('/ownerloginstore', [OwnerController::class, 'ownerLoginStore'])->name('owner.login.store');









