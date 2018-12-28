<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Validator;

class RoomController extends Controller
{
    public function rules(){
        return [
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'doorNumber' => 'required|numeric|min:0',
        'kidsCapacity' => 'required|numeric|min:0',
        'adultsCapacity' => 'required|numeric|min:0',
        'type' => 'required|numeric|min:0',
        'description' => 'required|string',
        'lodging_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'doorNumber' => 'numeric|min:0',
        'kidsCapacity' => 'numeric|min:0',
        'adultsCapacity' => 'numeric|min:0',
        'type' => 'numeric|min:0',
        'description' => 'string',
        'lodging_id' => 'numeric|min:0'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Room::all();
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

        $new = Room::create($request->all());
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
        return Room::findOrFail($id);
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
        $old = Room::findOrFail($id);
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
        $old = Room::findOrFail($id);
        $old->delete();

        return Room::all();
    }
}
