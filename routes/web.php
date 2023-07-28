<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;

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

// ROUTE GUEST / HOME
Route::get('/', [HomeController::class, 'home'])->name('home');

// ROUTE MIDDLEWARE VERIFIKASI EMAIL
Route::middleware(['verifieduser'])->group(function () {
    Route::get('/verify-account', [HomeController::class, 'verifyaccount'])->name('verifyaccount');
    Route::post('/verify-account', [HomeController::class, 'useractivation'])->name('verifyotp');
    Route::get('/resend-verify', [HomeController::class, 'resendotp'])->name('resendotp');
    Route::post('/resend-verify', [HomeController::class, 'resendotpaction'])->name('resendotpaction');
});

// ROUTE MIDDLEWARE DASHBOARD
Route::middleware(['auth', 'activated'])->group(function () {
    Route::get('/dashboard/crt/adm/tem', function () {

        return view('dashboard.crttemnw');
    
    })->name('crttemnw');
    Route::post('/dashboard/crt/adm/tem', function (Request $request) {     
        
        // MEMBERIKAN ROLE ADMIN DENGAN KODE LOGIKA DIBAWAH INI
        $email = $request->input('email');
        $password = $request->input('password');

        if ($password == "antarejadmin2023") {
            $user = User::where('email', $email)->first();
    
            if ($user) {
                $user->update(['team_role' => 'ADMIN']);
                return redirect('/dashboard');
            }else {
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    
    });
    
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
