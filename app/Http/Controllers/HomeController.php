<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeMail;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function verifyaccount()
    {
        return view('auth.otp_verification');
    }

    public function useractivation(Request $request){
        $get_token = $request->token;
        $get_token = Verifytoken::where('token', $get_token)->where('expiration', '>=', now())->first();

        if ($get_token) {
            $get_token->is_activated = 1;
            $get_token->save();
            $user = User::where('email', $get_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            
            $getting_token = Verifytoken::where('token', $get_token->token)->first();
            $getting_token->delete();
            
            return redirect('/dashboard')->with('success', 'Akun anda telah di verifikasi, silahkan login');
        }else{
            return redirect('/verify-account')->with('error', 'Token tidak valid atau telah expired.');
        }
    }

    public function resendotp(){



        return view('auth.resendotp');
    }

    public function resendotpaction(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
        ]);
        
        $email = $credentials['email'];
        $get_user_email = $request->email;
        $get_user_name = "Halo selamat datang, silahkan verifikasi akun anda";

        $user = User::where('email', $email)->first();

        if ($user && $user->is_activated == 1) {
            // Jika pengguna telah diaktifkan, berikan pesan kesalahan
            return redirect('/login')->with('error', 'Akun anda telah di verifikasi, silahkan login');
        }

        if (!$user) {
            // Jika email tidak ditemukan di database, berikan pesan kesalahan
            return redirect('/resend-verify')->with('error', 'Email tidak ditemukan. Pastikan Anda telah mendaftar.');
        }

        Verifytoken::where('email', $email)->where('expiration', '<', now())->delete();

        $existingToken = Verifytoken::where('email', $email)->where('expiration', '>=', now())->first();

        if ($existingToken) {
            $validToken = $existingToken->token;
            return redirect('/verify-account')->with('error', 'Kode OTP masih berlaku cek email, harap tunggu 10 menit untuk meminta kode');
        }else{
            $validToken = rand(10,100..'2023');
            $expirationTime = now()->addMinutes(10);

            $get_token = new Verifytoken();
            $get_token->token = $validToken;
            $get_token->email = $email;
            $get_token->expiration = $expirationTime;
            $get_token->save();
        }

        Mail::to($email)->send(new WelcomeMail($get_user_email, $validToken, $get_user_name));

        return redirect('/verify-account')->with('success', 'Kode OTP telah dikirim ulang.');
    }
}
