<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use Validator;

class ReserveController extends Controller
{
    public function rules(){
        return [
        'date' => 'required|date_format:Y-m-d H:i:s',
        'product' => 'required|string|max:50',
        'amount' => 'required|numeric|min:0',
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'user_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'date' => 'date_format:Y-m-d H:i:s',
        'product' => 'string|max:50',
        'amount' => 'numeric|min:0',
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'user_id' => 'numeric|min:0'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reserve::all();
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

        $new = Reserve::create($request->all());
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
        return Reserve::findOrFail($id);
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
        $old = Reserve::findOrFail($id);
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
        $old = Reserve::findOrFail($id);
        $old->delete();

        return Reserve::all();
    }
}
