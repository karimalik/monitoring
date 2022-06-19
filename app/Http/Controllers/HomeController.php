<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = DB::table('teams')->get();
        $maintenances = DB::table('maintenances')->get();
        $guardians = DB::table('guardians')->get();
        $codes = Maintenance::Where('leave_code')->get();

        return view('home', compact('teams', 'maintenances', 'guardians', 'codes'));
    }
}
