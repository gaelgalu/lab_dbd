<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Validator;
use Log;

class ActivityController extends Controller
{
    public function rules(){
        return [
        'adultPrice' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'kidPrice' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/', 
        'startDate' => 'required|date_format:Y-m-d H:i:s',
        'endDate' => 'required|date_format:Y-m-d H:i:s',
        'name' => 'required|string|max:30',
        'description' => 'required|string',
        'adultsCapacity' => 'required|numeric|min:0',
        'kidsCapacity' => 'required|numeric|min:0',
        'availability' => 'required|boolean',
        'activity_provider_id' => 'required|numeric|min:0'
        ];
    }

    public function rulesUpdate(){
        return [
        'adultPrice' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'kidPrice' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/', 
        'startDate' => 'date_format:Y-m-d H:i:s',
        'endDate' => 'date_format:Y-m-d H:i:s',
        'name' => 'string|max:30',
        'description' => 'string',
        'adultsCapacity' => 'numeric|min:0',
        'kidsCapacity' => 'numeric|min:0',
        'availability' => 'boolean',
        'activity_provider_id' => 'numeric|min:0'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Activity::all();
        Log::info('Index request: '.$all);
        return Activity::all();
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

        $new = Activity::create($request->all());
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
        return Activity::findOrFail($id);
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
        $old = Activity::findOrFail($id);
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
        $old = Activity::findOrFail($id);
        $old->delete();

        return Activity::all();
    }
}
