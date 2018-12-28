<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodging;
use Validator;

class LodgingController extends Controller
{
    public function rules(){
        return [
        'name' => 'required|string|max:50',
        'email' => 'required|email|max:50',
        'phoneNumber' => 'required|regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'evaluation' => 'required|numeric|max:32767|min:0',
        'numberOfRooms' => 'required|numeric|max:32767|min:0',
        'description' => 'required|string',
        'adress_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'name' => 'string|max:50',
        'email' => 'email|max:50',
        'phoneNumber' => 'regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'evaluation' => 'numeric|max:32767|min:0',
        'numberOfRooms' => 'numeric|max:32767|min:0',
        'description' => 'string',
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
        return Lodging::all();
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

        $new = Lodging::create($request->all());
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
        return Lodging::findOrFail($id);
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
        $old = Lodging::findOrFail($id);
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
        $old = Lodging::findOrFail($id);
        $old->delete();

        return Lodging::all();
    }
}