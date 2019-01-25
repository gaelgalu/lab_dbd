<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\ActivityProvider;
use App\Adress;
use Validator;
use Log;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $all = Activity::all();
        Log::info(' Index request: '.$all.'
            User: '.$user);
        return Activity::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = ActivityProvider::all();
        return view('activities.create',compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 400);
        }
        $new = Activity::create($request->all());
        Log::info('Store request: '.$new.'
            User: '.$user);
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

    public function search(){
        return view('searchactivity', [
            'adresses' => Adress::all(),
        ]);
    }

    public function results(Request $request){
        $activityProviders = ActivityProvider::All();

        $possibleProviders = [];

        foreach ($activityProviders as $provider) {
            if ($provider->adress->city == $request->ciudad){
                array_push($possibleProviders, $provider);
            }
        }

        $possibleActivities = [];

        foreach ($possibleProviders as $possibleProvider){
            $activities = $possibleProvider->activities;

            foreach ($activities as $activity){
                $reserves = $activity->reserves;
                $bool = 0;

                if ($reserves){
                    foreach ($reserves as $reserve) {
                        if (strtotime($reserve->activityStartDate) < strtotime(date('d-m-Y', strtotime($request->inicioActividad)))) {
                            $bool = 1;
                        }
                        else if (
                            (strtotime(date('d-m-Y', strtotime($request->inicioActividad))) >= strtotime($reserve->activityEndDate))){
                            $bool = 1;
                        }
                    }
                    if ($bool != 1){
                        array_push($possibleActivities, $activity);
                    }
                }
            }
        }

        $availableActivities = [];

        foreach ($possibleActivities as $possibleActivity){
            if ($possibleActivity->availability && $possibleActivity->adultsCapacity >= $request->capacidad_adultos &&$possibleActivity->kidsCapacity >= $request->capacidad_niños){
                array_push($availableActivities, $possibleActivity);
            }
        }

        return view('searchactivitiesresult', [
            'activities' => $availableActivities,
            'numberOfKids' => $request->capacidad_niños,
            'numberOfAdults' => $request->capacidad_adultos
        ]);
    }
}
