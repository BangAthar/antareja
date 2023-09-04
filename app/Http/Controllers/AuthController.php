<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    // FUNGSI DASHBOARD MAIN ATAU INDEX
    public function dashindex(){
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();

        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        $teamVerified = Team::find(auth()->user()->team_id);   

        $infos = Info::latest()->with('author')->get();
        return view('dashboard.index', compact('infos', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam', 'teamVerified'));
    }

    // FUNGSI DASHBOARD TEAM SETTING
    public function teamSetting(){
        $user = auth()->user();
        $teamMembers = User::where('team_id', $user->team_id)->get();
        $team = Team::find($user->team_id);
    
        $totalMembers = User::count(); // Mendapatkan total anggota tim dari tabel "users"
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"

        // Mendapatkan tim dan peserta terbaru
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        // TEAM VERIFIED
        $teamVerified = Team::find(auth()->user()->team_id);   
    
        return view('dashboard.team', compact('user', 'team', 'teamMembers', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam', 'teamVerified'));
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
        END")->get();

        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count(); // Mendapatkan total anggota tim dari tabel "users"

        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        $teamVerified = Team::find(auth()->user()->team_id); 

        if ($id) {
            $member = User::findOrFail($id);
            $teams = Team::all();
            return view('dashboard.member', compact('member', 'teams', 'user', 'teamMembers', 'totalMembers' , 'totalTeams', 'lastUser', 'lastTeam', 'teamVerified'));
        } else {
            $member = auth()->user();
            return view('dashboard.member', compact('user', 'teamMembers', 'totalMembers', 'member', 'totalTeams', 'lastUser', 'lastTeam', 'teamVerified'));
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

        $teamVerified = Team::find(auth()->user()->team_id);  

        $infos = Info::latest()->with('author')->get();
        return view('dashboard.informasi', compact('infos', 'totalTeams', 'totalMembers', 'lastUser', 'lastTeam', 'teamVerified'));
    }

    // FUNGSI DASHBOARD BUKU PANDUAN
    public function bukuPanduan()
    {
        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        $teamVerified = Team::find(auth()->user()->team_id);  

        return view('dashboard.panduan', compact('totalTeams', 'totalMembers', 'lastUser', 'lastTeam', 'teamVerified'));
    }

    // FUNGSI DASHBOARD REKAPAN NILAI
    public function rekapanNilai(){
        $totalpbb = 0;
        $totaldanpas = 0;
        $totalformasi = 0;
        $totalgertam = 0;
        $totalkostum = 0;
        $totalpasukan = 0;
        $totalvariasi = 0;

        $user = auth()->user();
        $team = Team::find($user->team_id);

        $pbb = Nilaipbb::where('team_id', $team->id)->first();
        $danpas = nilaidanpas::where('team_id', $team->id)->first();
        $formasi = nilaiformasi::where('team_id', $team->id)->first();
        $gertam = nilaigertam::where('team_id', $team->id)->first();
        $kostum = nilaikostum::where('team_id', $team->id)->first();
        $pasukan = nilaipasukan::where('team_id', $team->id)->first();
        $variasi = nilaivariasi::where('team_id', $team->id)->first();

        if($pbb){
            $totalpbb = $pbb->materi_1 + $pbb->materi_2 + $pbb->materi_3 + $pbb->materi_4 + $pbb->materi_5 + $pbb->materi_6 + $pbb->materi_7 + $pbb->materi_8 + $pbb->materi_9 + $pbb->materi_10 + $pbb->materi_11 + $pbb->materi_12 + $pbb->materi_13 + $pbb->materi_14 + $pbb->materi_15 + $pbb->materi_16 + $pbb->materi_17 + $pbb->materi_18 + $pbb->materi_19 + $pbb->materi_20 + $pbb->materi_21 + $pbb->materi_22 + $pbb->materi_23 + $pbb->materi_24 + $pbb->materi_25 + $pbb->materi_26 + $pbb->materi_27 + $pbb->materi_28 + $pbb->materi_29;
        }
        if($danpas){
            $totaldanpas = $danpas->materi_1 + $danpas->materi_2 + $danpas->materi_3 + $danpas->materi_4 + $danpas->materi_5;
        }
        if($formasi){
            $totalformasi = $formasi->materi_1 + $formasi->materi_2 + $formasi->materi_3 + $formasi->materi_4 + $formasi->materi_5 + $formasi->materi_6;
        }
        if($gertam){
            $totalgertam = $gertam->materi_1;
        }
        if($kostum){
            $totalkostum = $kostum->materi_1 + $kostum->materi_2 + $kostum->materi_3 + $kostum->materi_4 + $kostum->materi_5;
        }
        if($pasukan){
            $totalpasukan = $pasukan->materi_1 + $pasukan->materi_2 + $pasukan->materi_3 + $pasukan->materi_4 + $pasukan->materi_5;
        }
        if($variasi){
            $totalvariasi = $variasi->materi_1 + $variasi->materi_2 + $variasi->materi_3 + $variasi->materi_4 + $variasi->materi_5;
        }

        $totalTeams = Team::count(); // Mendapatkan total tim dari tabel "teams"
        $totalMembers = User::count();
        $lastTeam = Team::latest('created_at')->first();
        $lastUser = User::latest('created_at')->first();

        $teamVerified = Team::find(auth()->user()->team_id);

        return view('dashboard.rekapan-nilai', compact('totalTeams', 'totalMembers', 'lastUser', 'lastTeam', 'teamVerified', 'team', 'pbb', 'danpas', 'formasi', 'gertam', 'kostum', 'pasukan', 'variasi', 'totalpbb', 'totaldanpas', 'totalformasi', 'totalgertam', 'totalkostum', 'totalpasukan', 'totalvariasi'));
    }




}
