<?php

namespace App\Http\Controllers;
use App\Models\Cargo;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','role:admin|user']);
      
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(5);

        return view('vehicles.index', compact('vehicles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'plate' => 'required',
        ]);

        Vehicle::create($request->all());

        return redirect()->route('vehicles.index')
                        ->with('success','Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'plate' => 'required',
        ]);

        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')
                        ->with('success','Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicles.index')
                        ->with('success','Vehicle deleted successfully');
    }
}
