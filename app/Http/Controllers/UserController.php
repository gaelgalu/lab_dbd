<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{
    public function rules(){
        return [
        'country' => 'required|string',
        'email' => 'required|email|max:50',
        'password' => 'required|string',
        'name' => 'required|string',
        'lastName' => 'required|string',
        'bornDate' => 'required|date_format:Y-m-d H:i:s',
        'phone' => 'required|regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'documentOriginCountry' => 'required|string',
        'typeOfDocument' => 'required|string',
        'numberOfDocument' => 'required|numeric|min:0',
        'points' => 'required|numeric|min:0',
        'money' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/'
        ];
    }

    public function rulesUpdate(){
        return [
        'country' => 'string',
        'email' => 'email|max:50',
        'password' => 'string',
        'name' => 'string',
        'lastName' => 'string',
        'bornDate' => 'date_format:Y-m-d H:i:s',
        'phone' => 'regex:/^(\+[0-9]{3})[0-9]{1,11}$/',
        'documentOriginCountry' => 'string',
        'typeOfDocument' => 'string',
        'numberOfDocument' => 'numeric|min:0',
        'points' => 'numeric|min:0',
        'money' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
            return $validator->messages();
            return response()->json(['errors'=>$validator->errors()], 400);
        }

        $new = User::create($request->all());
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
        return User::findOrFail($id);
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
        $old = User::findOrFail($id);
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
        $old = User::findOrFail($id);
        $old->delete();

        return User::all();
    }
}
