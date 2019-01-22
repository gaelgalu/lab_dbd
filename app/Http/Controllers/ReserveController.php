<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Vehicle;
use App\PaymentMethod;
use App\VehicleSchedule;
use App\Seat;
use Auth;
use Validator;

class ReserveController extends Controller
{
    public function rules(){
        return [
            'user_id' => 'required|numeric|min:0',
            // 'payment_method_id' => 'required|numeric|min:0',
            // 'product' => 'required|string|max:50',
            'date' => 'required|date_format:Y-m-d H:i:s',
            'completed' => 'required|boolean',
            'amount' => 'required|numeric|min:0',
            'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
            'payment_method_id' => 'required|numeric',
            'seat_id' => 'numeric',
            'seat_id2' => 'numeric',
            'seat_id3' => 'numeric',
            'seat_id4' => 'numeric',
            'seat_id5' => 'numeric',
            'seat_id6' => 'numeric',
            'seat_id7' => 'numeric'
            // 'vehicleStartDate' => 'date_format:Y-m-d H:i:s',
            // 'vehicleEndDate' => 'date_format:Y-m-d H:i:s',
            // 'vehicle_id' => 'numeric',
            // 'flight_id' => 'numeric',
            // 'flight_id2' => 'numeric',
            // 'user_id' => 'required|numeric'
        ];
    }

    public function rulesUpdate(){
        return [
            'date' => 'date_format:Y-m-d H:i:s',
            // 'product' => 'string|max:50',
            'completed' => 'required|boolean',
            'amount' => 'numeric|min:0',
            'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/'
            // 'user_id' => 'numeric|min:0',
            // 'payment_method_id' => 'required|numeric|min:0'
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

        // if (Auth::check()){
            $new = Reserve::create([
                'date' => $request->date, //A qué se refiere esto? debiese ser now? timestamp?
                'completed' => $request->completed, //debiese ser false? o true porque ya pagó?
                'amount' => $request->amount,
                'price' => $request->price,
                'user_id' => /*Auth::id()*/ $request->user_id,
                'payment_method_id' => $request->payment_method_id
            ]);

            if ($request->seat_id && Seat::findOrFail($request->seat_id)){
                $new->seats()->attach($request->seat_id);
            }
        // }

        // if ($request->vehicle_id && Vehicle::findOrFail($request->vehicle_id)){
        //     $new->vehicles()->attach($request->vehicle_id);

        //     VehicleSchedule::create([
        //         'startDate' => $request->vehicleStartDate,
        //         'endDate' => $request->vehicleEndDate,
        //         'vehicle_id' => $request->vehicle_id
        //     ]);
        // }  

        // //En caso de que exista viaje de ida
        // if ($request->flight_id && Flight::findOrFail($request->flight_id)){
        //     $new->flights()->attach($request->flight_id);

        //     //En caso de que exista un viaje de ida y vuelta
        //     if ($request->flight_id2 && Flight::findOrFail($request->flight_id2)){
        //         $new->flights()->attach($request->flight_id2);
        //     }
        // }

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
