<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transfer;
use Validator;

class TransferController extends Controller
{
    public function rules(){
        return [
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'capacity' => 'required|numeric|min:0',
        'description' => 'required|string',
        'brand' => 'required|string|max:30',
        'model' => 'required|string|max:30',
        'type' => 'required|numeric|min:0',
        'availability' => 'required|boolean',
        'transfer_provider_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'capacity' => 'numeric|min:0',
        'description' => 'string',
        'brand' => 'string|max:30',
        'model' => 'string|max:30',
        'type' => 'numeric|min:0',
        'availability' => 'boolean',
        'transfer_provider_id' => 'numeric|min:0'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transfer::all();
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

        $new = Transfer::create($request->all());
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
        return Transfer::findOrFail($id);
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
        $old = Transfer::findOrFail($id);
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
        $old = Transfer::findOrFail($id);
        $old->delete();

        return Transfer::all();
    }
}
