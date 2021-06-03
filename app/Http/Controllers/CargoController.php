<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::with('vehicle')->get(); 

        return view('cargos.index', compact('cargos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = DB::table('vehicles')->pluck("name","id","type","plate");
        return view('cargos.create', compact('vehicles'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'sname' => 'required',
            'stcno' => 'required',
            'sphone' => 'required',
            'sadress' => 'required',
            'rname' => 'required',
            'rtcno' => 'required',
            'rphone' => 'required',
            'radress' => 'required',
            'price' => 'required',
        ]);   
    
        Cargo::create($request->all());
     
        return redirect()->route('cargos.index')
                        ->with('success','Cargo  created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        return view('cargos.show',compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {   
        $vehicles = DB::table('vehicles')->pluck("name","id");
        $vehicle = Vehicle::with('cargo')->find($cargo->vehicle_id);

        return view('cargos.edit',compact('cargo','vehicle', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'sname' => 'required',
            'stcno' => 'required',
            'sphone' => 'required',
            'sadress' => 'required',
            'rname' => 'required',
            'rtcno' => 'required',
            'rphone' => 'required',
            'radress' => 'required',
            'price' => 'required',
        ]);   
        $cargo->update($request->all());
    
        return redirect()->route('cargos.index')
                        ->with('success','Cargo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();   
        return redirect()->route('cargos.index')
                        ->with('success','Cargo deleted successfully');
                    }
}