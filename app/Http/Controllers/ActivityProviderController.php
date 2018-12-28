<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityProvider;
use Validator;

class ActivityProviderController extends Controller
{
    public function rules(){
        return [
        'name' => 'required|string|max:30',
        'email' => 'required|email|max:50',
        'phone' => 'required|regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'adress_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return[
        'name' => 'string|max:30',
        'email' => 'email|max:50',
        'phone' => 'regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
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
        return ActivityProvider::all();
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

        $new = ActivityProvider::create($request->all());
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
        return ActivityProvider::findOrFail($id);
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
        $old = ActivityProvider::findOrFail($id);
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
        $old = ActivityProvider::findOrFail($id);
        $old->delete();

        return ActivityProvider::all();
    }
}