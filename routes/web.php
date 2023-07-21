<?php

use App\Models\Info;
use App\Http\Controllers\DashHome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamController1;
use App\Http\Controllers\DPesertaController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\DasboardUserController;
use App\Http\Controllers\Auth\VerificationController;

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

// ROUTE LUAR

Route::view('/', 'home')->name('home');
Auth::routes(['verify' => true]);

// Verifikasi Email
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// ROUTE MIDDLEWARE
Route::middleware(['auth', 'verified'])->group(function () {
    
    // AUTH ROUTE
    Route::get('/dashboard', [AuthController::class, 'dashindex'])->name('main.dashboard');

    Route::get('/dashboard/team-setting', [AuthController::class, 'teamSetting'])->name('team-setting');
    Route::post('/dashboard/team-setting', [AuthController::class, 'EditTeamSetting'])->name('EditTeamSetting');
    
    Route::post('/dashboard/member-setting/{id}/update', [AuthController::class, 'updateMember'])->name('updateMember');
    Route::get('/dashboard/member-setting/{id?}', [AuthController::class, 'editMember'])->name('editMember');    

    Route::get('/dashboard/informasi', [AuthController::class, 'informasi'])->name('informasi');
    Route::get('/dashboard/buku-panduan', [AuthController::class, 'bukuPanduan'])->name('bukuPanduan');
    Route::view('/dashboard/rekapan-nilai', 'dashboard.rekapan-nilai');

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/dashboard/create-informasi', [AdminController::class, 'createInformasi'])->name('infoCreate');
        Route::post('/dashboard/create-informasi', [AdminController::class, 'storeCreateInformasi'])->name('infoStore');

        Route::get('/dashboard/create-team', [AdminController::class, 'createTeam'])->name('showcreateteam');
        Route::post('/dashboard/create-team', [AdminController::class, 'storeCreateTeam'])->name('storeCreateTeam');

        Route::get('/dashboard/data-peserta', [AdminController::class, 'datapeserta'])->name('data-peserta');
        Route::get('/dashboard/data-team', [AdminController::class, 'datateam'])->name('data-team');
        Route::view('/dashboard/rekapnilai-setting', 'dashboard.admin.rekap-setting');
    });
    
});

// authenticate
Route::get('/login', [LoginController::class, 'index'])->name('login')->Middleware('guest');
Route::post('/login', [LoginController::class, 'LoginAccount'])->name('LoginAccount');
Route::post('/logout', [LoginController::class, 'LogoutAccount'])->name('LogoutAccount');

Route::get('/register', [RegisterController::class, 'index'])->name('index')->Middleware('guest');
Route::post('/register', [RegisterController::class, 'CreateAccount'])->name('CreateAccount');

