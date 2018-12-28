<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use Validator;

class AirportController extends Controller
{
    public function rules(){
        return [
        'name' => 'required|string|max:50',
        'telephone' => 'required|regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'mail' => 'required|email|max:50',
        'adress_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'name' => 'string|max:50',
        'telephone' => 'regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'mail' => 'email|max:50',
        'adress_id' => 'numeric|min:0'

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Airport::all();
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

        $new = Airport::create($request->all());
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
        return Airport::findOrFail($id);
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
        $old = Airport::findOrFail($id);
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
        $old = Airport::findOrFail($id);
        $old->delete();

        return Airport::all();
    }
}
