<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Team;
use App\Models\User;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

    // FUNGSI DASHBOARD MAIN ATAU INDEX
    public function dashindex(){
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();

        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();
        
        $infos = Info::latest()->with('author')->get();
        return view('dashboard.index', compact('infos', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam'));
    }

    // FUNGSI DASHBOARD TEAM SETTING
    public function teamSetting(){
        $user = auth()->user();
        $teamMembers = User::where('team_id', $user->team_id)->get();
        $team = Team::find($user->team_id);
    
        $totalMembers = User::count(); // Mendapatkan total anggota tim dari tabel "users"
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"

        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();
    
        return view('dashboard.team', compact('user', 'team', 'teamMembers', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam'));
    }

    public function EditTeamSetting(Request $request)
    {
        $request->validate([
            'team_name' => 'required|max:100',
            'team_school' => 'max:100',
            'team_school_address' => 'max:100',
            'team_school_province' => 'max:100',
            'team_school_city' => 'max:100',
            'team_school_postal' => 'max:100',
        ]);

        // Dapatkan tim berdasarkan id user saat ini
        $team = Team::find(auth()->user()->team_id);

        // Perbarui data tim dengan nilai yang diberikan dalam permintaan
        $team->team_name = $request->team_name;
        $team->team_school = $request->team_school;
        $team->team_school_address = $request->team_school_address;
        $team->team_school_province = $request->team_school_province;
        $team->team_school_city = $request->team_school_city;
        $team->team_school_postal = $request->team_school_postal;

        // Simpan perubahan pada tim
        $team->save();

        // Redirect atau lakukan operasi lain yang diinginkan setelah berhasil mengedit tim
        return redirect()->back()->with('success', 'Informasi tim berhasil diperbarui.');
    }

    // FUNGSI DASHBOARD MEMBER SETTING
    public function editMember($id = null)
    {
        $user = auth()->user();
        $teamMembers = User::where('team_id', $user->team_id)
            ->orderByRaw("CASE 
            WHEN team_role = 'PELATIH' THEN 1
            WHEN team_role = 'OFFICIAL' THEN 2 
            WHEN team_role = 'DANPAS' THEN 3 
            ELSE 4 
        END")
            ->get();

        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count(); // Mendapatkan total anggota tim dari tabel "users"

        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        if ($id) {
            $member = User::findOrFail($id);
            $teams = Team::all();
            return view('dashboard.member', compact('member', 'teams', 'user', 'teamMembers', 'totalMembers' , 'totalTeams', 'lastUser', 'lastTeam'));
        } else {
            $member = auth()->user();
            return view('dashboard.member', compact('user', 'teamMembers', 'totalMembers', 'member', 'totalTeams', 'lastUser', 'lastTeam'));
        }
    }

    public function updateMember(Request $request, $id)
    {
        $member = User::findOrFail($id);

        $rules = [
            'nis' => 'required',
            'nisn' => 'required',
            'name' => 'required',
            'sekolah' => 'required',
            'email' => [
                'required',
                'email:dns',
                Rule::unique('users')->ignore($member->id),
            ],
            'nomor_hp' => [
                'nullable',
                'required',
                'numeric',
                'digits_between:10,12',
                Rule::unique('users')->ignore($member->id),
            ],
            'instagram' => ['nullable', 'required'],
            'alamat' => ['nullable', 'required',
            ]
        ];

        $validatedData = $request->validate($rules);

        $member->update($validatedData);

        // Redirect back to the member list section on the same page
        return redirect()->route('editMember')->with('success', 'Data anggota tim berhasil diperbarui.');
    }

    // FUNGSI DASHBOARD INFORMASI
    public function informasi(){
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        $infos = Info::latest()->with('author')->get();
        return view('dashboard.informasi', compact('infos', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam'));
    }

    // FUNGSI DASHBOARD BUKU PANDUAN
    public function bukuPanduan()
    {
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        return view('dashboard.panduan', compact('totalTeams', 'totalMembers', 'lastUser', 'lastTeam'));
    }

    // FUNGSI DASHBOARD REKAPAN NILAI
    public function rekapanNilai(){
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();
    
        return view('dashboard.rekapan-nilai', compact('totalTeams', 'totalMembers', 'lastUser', 'lastTeam'));
    }




}
