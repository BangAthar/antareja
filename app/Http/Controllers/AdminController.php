<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Team;
use App\Models\User;
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
}
