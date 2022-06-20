<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaintenanceRequest;
use App\Http\Requests\UpdateMaintenanceRequest;


class MaintenanceController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maintenances = Maintenance::all();

        return view('maintenance', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::all();

        return view('newMaintenance', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaintenanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('image');
        $fileName =  time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/Maintenance', $fileName);

        $empData = [
            'site' => $request->site,
            'reference' => $request->reference,
            'status' => implode(',', $request->status),
            'diagnostique' => $request->diagnostique,
            'action' => $request->action,
            'image' => $fileName,
            'observation' => $request->observation,
            'comment' => $request->comment,
            'leave_code' => $request->leave_code,
            'team_id' => $request->team_id,
            'date' => $request->date,
        ];

        // $input = $request->all();
        // $input['status'] = $request->input('status');

	    Maintenance::create($empData);

        notify()->success('Maintenance creaded successfully 👌😎!');

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaintenanceRequest  $request
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaintenanceRequest $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        //
        $maintenance->delete();

        notify()->success('data deleted successfully😎');

        return back();
    }
}
