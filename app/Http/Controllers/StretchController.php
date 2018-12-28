<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stretch;
use Validator;

class StretchController extends Controller
{
    public function rules(){
        return [
        'origin' => 'required|string|max:60',
        'destiny' => 'required|string|max:60',
        'airline' => 'required|string',
        'platform' => 'required|numeric|min:0',
        'riseTime' => 'required|date_format:Y-m-d H:i:s'
        ];
    }

    public function rulesUpdate(){
        return [
        'origin' => 'string|max:60',
        'destiny' => 'string|max:60',
        'airline' => 'string',
        'platform' => 'numeric|min:0',
        'riseTime' => 'date_format:Y-m-d H:i:s'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Stretch::all();
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

        $new = Stretch::create($request->all());
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
        return Stretch::findOrFail($id);
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
        $old = Stretch::findOrFail($id);
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
        $old = Stretch::findOrFail($id);
        $old->delete();

        return Stretch::all();
    }
}
