<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use Validator;
use DB;
use App\Adress;
use App\Airport;

class FlightController extends Controller
{
    public function rules(){
        return [
        'price' => 'required|numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'startDate' => 'required|date_format:Y-m-d H:i:s',
        'endDate' => 'required|date_format:Y-m-d H:i:s',
        'availability' => 'required|boolean',
        ];
    }

    public function rulesUpdate(){
        return [
        'price' => 'numeric|regex:/^\d{0,18}(\.\d{1,2})?$/',
        'startDate' => 'date_format:Y-m-d H:i:s',
        'endDate' => 'date_format:Y-m-d H:i:s',
        'availability' => 'boolean',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Flight::all();
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

        $new = Flight::create($request->all());
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
        return Flight::findOrFail($id);
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
        $old = Flight::findOrFail($id);
        $validator = Validator::make($request->all(), $this->rulesUpdate());
        if($validator->fails()){
            return response()->json($old, 400);
        }
        
        $old->update($request->all());

        return response()->json($old,200);
    }
    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = "city";

        $data = DB::table('adresses')->select('city')->where('city', '!=', $value)->get();

        $output = '<option value="">Select Destiny City</option>';
         foreach($data as $row)
         {
          $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
         }
         echo $output;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Flight::findOrFail($id);
        $old->delete();

        return Flight::all();
    }

    public function search()
    {
        return view('searchflight')->with('adresses', Adress::All());
    }

    public function results(Request $request){
        $flights = Flight::All();

        $result = [];

        foreach ($flights as $flight) {
            $origin = Airport::where('id', $flight->origin)->get()->first()->adress->city;
            $destiny = Airport::where('id', $flight->destiny)->get()->first()->adress->city;

            if ($origin == $request->origen_id && $destiny == $request->destino_id
                && strtotime($request->departureDate) <= strtotime($flight->departureDate)){
                array_push($result, $flight);
            }
        }

        return view('searchflightresults', [
            'results' => $result,
            'origin' => $request->origen_id,
            'destination' => $request->destino_id,
            'typeOfSeat' => $request->tipoAsiento
        ]);
    }


}
