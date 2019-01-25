<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Adress;
use Validator;

class PackageController extends Controller
{
    public function rules(){
        return [
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'name' => 'required|string|max:30',
        'discount' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/', 
        'description' => 'required|string'
        ];
    }

    public function rulesUpdate(){
        return [
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'name' => 'string|max:30',
        'discount' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/', 
        'description' => 'string'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('packages.index', ['packages' => Package::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 400);
        }

        $new = Package::create($request->all());
        return response()->json($new, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::findOrFail($id);
        $vehicles = $package->vehicles;
        $rooms = $package->rooms;
        $activities = $package->activities;
        $flights = $package->flights;
        $transfers = $package->transfers;
        $transferOriginCities = [];
        $transferDestinationCities = [];

        foreach ($transfers as $transfer) {
            $originCity = Adress::find($transfer->origin)->city;
            $destinyCity = Adress::find($transfer->destiny)->city;

            array_push($transferOriginCities, $originCity);
            array_push($transferDestinationCities, $destinyCity);
        }

        return view('packages.show', [
            "package" => $package,
            "vehicles" => $vehicles,
            "rooms" => $rooms,
            "activities" => $activities,
            "flights" => $flights,
            "transfers" => $transfers,
            "originCities" => $transferOriginCities,
            "destinationCities" => $transferDestinationCities,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old = Package::findOrFail($id);
        $validator = Validator::make($request->all(), $this->rulesUpdate());
        if($validator->fails()){
            return response()->json($old, 400);
        }
        
        $old->update($request->all());

        return response()->json($old,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Package::findOrFail($id);
        $old->delete();

        return Package::all();
    }
}
