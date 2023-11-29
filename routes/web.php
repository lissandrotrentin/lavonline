<?php

use App\Http\Controllers\ImagesWashingController;
use App\Http\Controllers\MarkWashingController;
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
})->name('welcome');  

Route::get('/userstoreform', [UserController::class, 'userStoreForm'])->name('user.store.form');

Route::post('/userstore', [UserController::class, 'UserStore'])->name('user.store');

Route::get('/loginuserform', [UserController::class, 'loginUserForm'])->name('user.login.form');

Route::post('/loginuser', [UserController::class, 'loginUser'])->name('user.login');

Route::get('/logoutuser', [UserController::class, 'logout'])->name('user.logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::post('/addrees', [UserController::class, 'addressStore'])->name('address.store');

Route::get('/addreesform', [UserController::class, 'addressform'])->name('address.form');

Route::post('/markservice', [MarkWashingController::class, 'markService'])->name('mark.service');

Route::post('/markday', [MarkWashingController::class, 'markDay'])->name('mark.day');

Route::post('/storeagendamento', [MarkWashingController::class, 'storeAgendamento'])->name('agendamento.store');

Route::get('/formMessage', [MarkWashingController::class, 'formMessage'])->name('message.form'); 

Route::post('/sendmessage', [MarkWashingController::class, 'sendMessage'])->name('send.message'); 

Route::get('/washingform', [WashingController::class, 'washingform'])->name('washing.form');

Route::get('/washingdashboard', [OwnerController::class, 'washingdashboard'])->name('owner.dashboard');

Route::post('/ownerstore', [OwnerController::class, 'ownerstore'])->name('owner.store');

Route::get('/ownerform', [OwnerController::class, 'ownersform'])->name('owner.form');

Route::post('/washingstore', [WashingController::class, 'washingstore'])->name('washing.store');

Route::get('/ownerlogin', [OwnerController::class, 'ownerslogin'])->name('owner.login');

Route::post('/ownerloginstore', [OwnerController::class, 'ownerLoginStore'])->name('owner.login.store');

Route::get('/washinginformation/{id}', [WashingController::class, 'washingInformation'])->name('washing.information');

Route::post('/servicestore', [WashingController::class, 'serviceStore'])->name('service.store');















