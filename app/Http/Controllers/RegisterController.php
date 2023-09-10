<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Mail\WelcomeMail;
use App\Models\Verifytoken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\Mime\Email;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function CreateAccount(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:250',
            'team_name' => 'required|max:100',
            'email' => 'required|email:dns|unique:users,email',
            'team_role' => 'required|max:100',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        // Memastikan kedua password yang diinputkan sama
        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password_confirmation' => 'Password tidak sesuai']);
        }

        // Mengubah sekolah menjadi huruf kapital
        $validatedData['team_role'] = strtoupper($validatedData['team_role']);

        // Mengubah team_name menjadi huruf kapital
        $teamName = strtoupper($request['team_name']);

        // Cek apakah team_name sudah ada dalam tabel teams (dalam bentuk huruf kapital)
        $teamExists = Team::whereRaw('UPPER(team_name) = ?', [$teamName])->exists();

        if (!$teamExists) {
            // Nama tim belum terdaftar
            return redirect()->back()->withErrors(['team_name' => 'Nama tim belum terdaftar']);
        }

        // Cek apakah tim sudah memiliki pelatih, danpas, dan official
        $team = Team::where('team_name', $teamName)->first();
        $hasTrainer = User::where('team_id', $team->id)->where('team_role', 'PELATIH')->exists();
        $hasOfficial = User::where('team_id', $team->id)->where('team_role', 'OFFICIAL')->exists();
        $hasDanpas = User::where('team_id', $team->id)->where('team_role', 'DANPAS')->exists();

        if ($validatedData['team_role'] === 'PELATIH' && $hasTrainer) {
            return redirect()->back()->withErrors(['team_role' => 'Hanya dapat ada satu pelatih dalam tim']);
        } elseif ($validatedData['team_role'] === 'OFFICIAL' && $hasOfficial) {
            return redirect()->back()->withErrors(['team_role' => 'Hanya dapat ada satu official dalam tim']);
        } elseif ($validatedData['team_role'] === 'DANPAS' && $hasDanpas) {
            return redirect()->back()->withErrors(['team_role' => 'Hanya dapat ada satu danpas dalam tim']);
        }

        // Cek apakah team_name sudah ada dalam tabel teams (dalam bentuk huruf kapital)
        $team = Team::firstOrCreate(['team_name' => $teamName]);

        // Hashing password sebelum menyimpannya ke database
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Generate verifikasi token
        $validToken = rand(10,100..'2023');
        $expirationTime = now()->addMinutes(10);

        $get_token = new Verifytoken();
        $get_token->token = $validToken;
        $get_token->email = $validatedData['email'];
        $get_token->expiration = $expirationTime;
        $get_token->save();

        // Kirim email verifikasi
        $get_user_email = $validatedData['email'];
        $get_user_name = $validatedData['name'];
        Mail::to($validatedData['email'])->send(new WelcomeMail($get_user_email, $validToken, $get_user_name));

        // Simpan data ke database
        $user = new User();
        $user->team_id = $team->id;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->team_role = $validatedData['team_role'];
        $user->password = $validatedData['password'];
        $user->save();

        return redirect('/login')->with('success', 'Data anda terdaftar di sistem.');
    }

    public function registeamindex()
    {
        return view('register-team');
    }

    public function registeamadd(Request $request){
        $validatedData = $request->validate([
            'team_name' => 'required|max:100',
            'team_school_type' => 'required|max:100',
            'team_school_payment' => 'required|max:100',
            'team_payment_proof' => 'image|mimes:jpeg,png,jpg|max:5248',
        ]);

        $teamName = strtoupper($validatedData['team_name']);
        $validatedData['team_school_type'] = strtoupper($validatedData['team_school_type']);
        $validatedData['team_school_payment'] = strtoupper($validatedData['team_school_payment']);

        // Cek apakah team_name sudah ada dalam tabel teams (dalam bentuk huruf kapital)
        $teamExists = Team::whereRaw('UPPER(team_name) = ?', [$teamName])->exists();
        
        if ($teamExists) {
            // Nama tim sudah terdaftar
            return redirect()->back()->withErrors(['team_name' => 'Nama tim sudah terdaftar']);
        }

        // Simpan data ke database
        $team = new Team();
        $team->team_name = $teamName;
        $team->team_school_type = $validatedData['team_school_type'];
        $team->team_school_payment = $validatedData['team_school_payment'];

        if ($request->hasFile('team_payment_proof')) {
            $imagePath = $request->file('team_payment_proof')->store('bukti-pembayaran','public');
            $team->team_payment_proof = $imagePath;
        }

        $team->save();

        return redirect('/daftar-akun')->with('success', 'Team berhasil didaftarkan ke sistem');
    }
}