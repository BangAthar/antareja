<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Team;
use App\Models\User;
use App\Models\Nilaipbb;
use App\Models\nilaidanpas;
use App\Models\nilaigertam;
use App\Models\nilaikostum;
use App\Models\nilaiformasi;
use App\Models\nilaipasukan;
use App\Models\nilaivariasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // FUNGSI DASHBOARD ADMIN CREATE INFORMASI
    public function createInformasi()
    {
        return view('dashboard.admin.create-informasi');
    }

    public function storeCreateInformasi(Request $request)
    {
        $validatedData = $request->validate([
            'pesan' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        // dd($validatedData);

        $info = new Info();
        $info->pesan = $validatedData['pesan'];
        $info->user_id = $validatedData['user_id'];
        $info->save();

        return redirect('/dashboard/create-informasi')->with('success', 'Informasi berhasil ditambahkan');
    }

    // FUNGSI DASHBOARD ADMIN CREATE TEAM
    public function createTeam()
    {
        return view('dashboard.admin.create-team');
    }

    public function storeCreateTeam(Request $request)
    {
        $validatedData = $request->validate([
            'team_name' => 'required',
        ]);

        // dd($validatedData);

        $team = new Team();
        $team->team_name = $validatedData['team_name'];
        $team->save();

        return redirect('/dashboard/create-team')->with('success', 'Team berhasil ditambahkan');
    }

    // FUNGSI DASHBOARD ADMIN DATA PESERTA
    public function datapeserta(Request $request){
        $users = User::with(['team'])->get();
        $userId = $request->input('peserta');
        $showuser = User::find($userId);

        $userIddel = $request->input('hapus');
        if ($userIddel) {
            $deluser = User::find($userIddel);
            $deluser->delete();
            return redirect()->route('data-peserta');
        }
        // dd($users);
        return view('dashboard.admin.data-peserta', compact('users', 'showuser'));
    }

    // FUNGSI DASHBOARD ADMIN DATA TEAM
    public function datateam(Request $request){
        $teams = Team::all();
        $teamId = $request->input('team');
        $showteam = Team::find($teamId);

        $teamIddel = $request->input('hapus');
        if ($teamIddel) {
            $delteam = Team::find($teamIddel);
            $delteam->delete();
            return redirect()->route('data-team');
        }

        return view('dashboard.admin.data-team', compact('teams', 'showteam'));
    }

    public function teamverify(Request $request){
        $teamId = $request->input('team');
        $team = Team::find($teamId);;

    if ($team) {
        $team->is_verified = 1; // Mengubah is_verified menjadi 1
        $team->save();
    }

    return back();
    }

    public function rekapnilaisetting(Request $request){
        $teams = Team::all();
        $teamId = $request->input('team');
        $showteam = Team::find($teamId);
        $showpbb = Nilaipbb::where('team_id', $teamId)->first();
        $showvariasi = nilaivariasi::where('team_id', $teamId)->first();
        $showpasukan = nilaipasukan::where('team_id', $teamId)->first();
        $showkostum = nilaikostum::where('team_id', $teamId)->first();
        $showgertam = nilaigertam::where('team_id', $teamId)->first();
        $showdanpas = nilaidanpas::where('team_id', $teamId)->first();
        $showformasi = nilaiformasi::where('team_id', $teamId)->first();

        $totalpbb = 0;
        $totalvariasi = 0;
        $totalpasukan = 0;
        $totalkostum = 0;
        $totalgertam = 0;
        $totaldanpas = 0;
        $totalformasi = 0;

        if ($showpbb) {
            for ($i = 1; $i <= 29; $i++) {
                $field = 'materi_' . $i;
                $totalpbb += $showpbb->$field;
            }
        }
        if ($showvariasi) {
            for ($i = 1; $i <= 5; $i++) {
                $field = 'materi_' . $i;
                $totalvariasi += $showvariasi->$field;
            }
        }
        if ($showpasukan) {
            for ($i = 1; $i <= 5; $i++) {
                $field = 'materi_' . $i;
                $totalpasukan += $showpasukan->$field;
            }
        }
        if ($showkostum) {
            for ($i = 1; $i <= 5; $i++) {
                $field = 'materi_' . $i;
                $totalkostum += $showkostum->$field;
            }
        }
        if ($showgertam) {
            for ($i = 1; $i <= 1; $i++) {
                $field = 'materi_' . $i;
                $totalgertam += $showgertam->$field;
            }
        }
        if ($showdanpas) {
            for ($i = 1; $i <= 5; $i++) {
                $field = 'materi_' . $i;
                $totaldanpas += $showdanpas->$field;
            }
        }
        if ($showformasi) {
            for ($i = 1; $i <= 6; $i++) {
                $field = 'materi_' . $i;
                $totalformasi += $showformasi->$field;
            }
        }

        $allpoint = $totalpbb + $totalvariasi + $totalpasukan + $totalkostum + $totalgertam + $totaldanpas + $totalformasi;
        

        return view('dashboard.admin.rekap-setting', compact('teams', 'showteam', 'showpbb', 'showvariasi', 'showpasukan', 'showkostum', 'showgertam', 'showdanpas', 'showformasi', 'totalpbb', 'totalvariasi', 'totalpasukan', 'totalkostum', 'totalgertam', 'totaldanpas', 'totalformasi', 'allpoint'));
    }

    public function updatenilaipbb(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required','materi_6' => 'required','materi_7' => 'required','materi_8' => 'required','materi_9' => 'required','materi_10' => 'required','materi_11' => 'required','materi_12' => 'required','materi_13' => 'required','materi_14' => 'required','materi_15' => 'required','materi_16' => 'required','materi_17' => 'required','materi_18' => 'required','materi_19' => 'required','materi_20' => 'required','materi_21' => 'required','materi_22' => 'required','materi_23' => 'required','materi_24' => 'required','materi_25' => 'required','materi_26' => 'required','materi_27' => 'required','materi_28' => 'required','materi_29' => 'required',
            ]
        );
        
        $nilai = Nilaipbb::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 29; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai PBB berhasil diupdate');
    }

    public function updatenilaivariasi(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required',
            ]
        );
        
        $nilai = nilaivariasi::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 5; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai VARIASI berhasil diupdate');
    }
    public function updatenilaiformasi(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required', 'materi_6' => 'required'
            ]
        );
        
        $nilai = nilaiformasi::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 6; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai FORMASI berhasil diupdate');
    }
    public function updatenilaigertam(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required',
            ]
        );
        
        $nilai = nilaigertam::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 1; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai GERAKAN TAMBAHAN berhasil diupdate');
    }
    public function updatenilaidanpas(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required',
            ]
        );
        
        $nilai = nilaidanpas::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 5; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai DANPAS berhasil diupdate');
    }
    public function updatenilaipasukan(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required',
            ]
        );
        
        $nilai = nilaipasukan::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 5; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai PASUKAN berhasil diupdate');
    }
    public function updatenilaikostum(Request $request){
        $validatedData = $request->validate(
            [
                'materi_1' => 'required','materi_2' => 'required','materi_3' => 'required','materi_4' => 'required','materi_5' => 'required',
            ]
        );
        
        $nilai = nilaikostum::where('team_id', $request->team)->first();
        if (!$nilai) {
            return back()->with('error', 'Tim tidak ditemukan.');
        }

        for ($i = 1; $i <= 5; $i++) {
            $field = 'materi_' . $i;
            $nilai->$field = $request->$field;
        }
        
        $nilai->save($validatedData);

        return back()->with('success', 'Nilai KOSTUM & MAKEUP berhasil diupdate');
    }

    public function unlocknilai(Request $request){
        $teamId = $request->input('unlock');
        $team = Team::find($teamId);;

        // Membuat nilai PBB baru untuk team yang di-unlock
        $nilaipbb = new Nilaipbb();
        $nilaipbb->team_id = $teamId;
        $nilaipbb->save();
        $nilaidanpas = new nilaidanpas();
        $nilaidanpas->team_id = $teamId;
        $nilaidanpas->save();
        $nilaiformasi = new nilaiformasi();
        $nilaiformasi->team_id = $teamId;
        $nilaiformasi->save();
        $nilaigertam = new nilaigertam();
        $nilaigertam->team_id = $teamId;
        $nilaigertam->save();
        $nilaikostum = new nilaikostum();
        $nilaikostum->team_id = $teamId;
        $nilaikostum->save();
        $nilaipasukan = new nilaipasukan();
        $nilaipasukan->team_id = $teamId;
        $nilaipasukan->save();
        $nilaivariasi = new nilaivariasi();
        $nilaivariasi->team_id = $teamId;
        $nilaivariasi->save();

        if ($team) {
            $team->is_unlocknilai = 1; // Mengubah is_unlocknilai menjadi 1 agar tidak bisa membuat nilai PBB lagi
            $team->save();
        }

        return redirect()->route('rekapnilaisetting')->with('success', 'TIM berhasil di-unlock, silahkan melakukan penilaian');
    }

}
