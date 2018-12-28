<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use Validator;

class VehicleController extends Controller
{
    public function rules(){
        return [
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'date' => 'required|date_format:Y-m-d H:i:s',
        'availability' => 'required|boolean',
        'capacity' => 'required|numeric|max:32767|min:0',
        'patent' => 'required|string|max:10',
        'brand' => 'required|string|max:25',
        'model' => 'required|string|max:25',
        'description' => 'required|string',
        'vehicle_supplier_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'date' => 'date_format:Y-m-d H:i:s',
        'availability' => 'boolean',
        'capacity' => 'numeric|max:32767|min:0',
        'patent' => 'string|max:10',
        'brand' => 'string|max:25',
        'model' => 'string|max:25',
        'description' => 'string',
        'vehicle_supplier_id' => 'numeric|min:0'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vehicle::all();
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
            return response()->json([], 400);
        }

        $new = Vehicle::create($request->all());
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
        return Vehicle::findOrFail($id);
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
        $old = Vehicle::findOrFail($id);
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
        $old = Vehicle::findOrFail($id);
        $old->delete();

        return Vehicle::all();
    }
}
