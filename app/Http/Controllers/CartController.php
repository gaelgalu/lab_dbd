<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Vehicle;
use App\Room;
use App\Transfer;
use App\Flight;
use App\Seat;
use App\Package;
use App\Insurance;
use App\Reserve;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Log;
use DateTime;

class CartController extends Controller
{

    public function __construct(){
		if(!\Session::has('cart')) \Session::put('cart', array("activity" => array(), "vehicle" => array(), "room" => array(), "transfer" => array(), "insurance" => array(), "flight" => array(), "package" => array()));
	}

    //Show cart
	public function show()
    {
        $cart = \Session::get('cart');
        $subtotal = $this->total();
        $total = 0;
        foreach ($subtotal as $subtotalProduct) {
            $total += array_sum($subtotalProduct);
        }
        return view('cart')->with('cart', $cart)->with('total', $total)->with('subtotal', $subtotal);
    }

    //Add item

		//Activity
	public function addActivity($id, $amountOfKids, $amountOfAdults){
    	$cart = \Session::get('cart');
    	$product = Activity::find($id);
    	$newProduct = new Activity();
        $newProduct->id = $product->id;
    	$newProduct->adultPrice = $product->adultPrice;
    	$newProduct->kidPrice = $product->kidPrice; 
    	$newProduct->startDate = $product->startDate;
    	$newProduct->endDate = $product->endDate;
    	$newProduct->name = $product->name;
    	$newProduct->description = $product->description;
    	$newProduct->adultsCapacity = $amountOfAdults;
    	$newProduct->kidsCapacity = $amountOfKids;
    	$newProduct->availability = $product->availability;
    	$newProduct->activity_provider_id = $product->activity_provider_id;
    	array_push($cart['activity'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }

    	//Vehicle
    public function addVehicle($id, $startDate, $endDate){
    	$cart = \Session::get('cart');
    	$product = Vehicle::find($id);
    	$newProduct = new Vehicle();
        $newProduct->id = $product->id;
    	$newProduct->name = $product->name;
    	$newProduct->price = $product->price; 
    	$newProduct->date = $product->date;
    	$newProduct->availability = $product->availability;
    	$newProduct->capacity = $product->capacity;
    	$newProduct->patent = $product->patent;
    	$newProduct->brand = $product->brand;
    	$newProduct->model = $product->model;
    	$newProduct->description = $product->description;
        $dtime1 = DateTime::createFromFormat("Y-m-d H:i:s", $startDate);
        $timestamp1 = $dtime1->getTimestamp();
        $dtime2 = DateTime::createFromFormat("Y-m-d H:i:s", $endDate);
        $timestamp2 = $dtime2->getTimestamp();
        $newProduct->type = abs($timestamp1 - $timestamp2)/60/60/24;
    	$newProduct->vehicle_supplier_id = $product->vehicle_supplier_id;
    	array_push($cart['vehicle'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }

    	//Room
    public function addRoom($id, $startDate, $endDate){
    	$cart = \Session::get('cart');
    	$product = Room::find($id);
    	$newProduct = new Room();
        $newProduct->id = $product->id;
    	$newProduct->doorNumber = $product->doorNumber;
    	$newProduct->price = $product->price; 
    	$newProduct->kidsCapacity = $product->kidsCapacity;
    	$newProduct->adultsCapacity = $product->adultsCapacity;
        $dtime1 = DateTime::createFromFormat("Y-m-d H:i:s", $startDate);
        $timestamp1 = $dtime1->getTimestamp();
        $dtime2 = DateTime::createFromFormat("Y-m-d H:i:s", $endDate);
        $timestamp2 = $dtime2->getTimestamp();
    	$newProduct->type = abs($timestamp1 - $timestamp2)/60/60/24;
    	$newProduct->description = $product->description;
    	$newProduct->availability = $product->availability;
    	$newProduct->lodging_id = $product->lodging_id;
    	array_push($cart['room'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }

    //Transfer
    public function addTransfer($id){
    	$cart = \Session::get('cart');
    	$product = Transfer::find($id);
    	$newProduct = new Transfer();
        $newProduct->id = $product->id;
    	$newProduct->price = $product->price;
    	$newProduct->capacity = $product->capacity; 
    	$newProduct->description = $product->description;
    	$newProduct->brand = $product->brand;
    	$newProduct->model = $product->model;
    	$newProduct->type = $product->type;
    	$newProduct->availability = $product->availability;
    	$newProduct->transfer_provider_id = $product->transfer_provider_id;
    	array_push($cart['transfer'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }

    	//Flight
    public function addFlight($id){
    	$cart = \Session::get('cart');
    	$product = Seat::find($id);
    	$newProduct = new Seat();
        $newProduct->id = $product->id;
    	$newProduct->code = $product->code;
    	$newProduct->availability = $product->availability; 
    	$newProduct->checkIn = $product->checkIn;
    	$newProduct->type = $product->type;
        $newProduct->flight_id = $product->flight_id;
    	array_push($cart['flight'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }

    	//Package
	public function addPackage($id){
    	$cart = \Session::get('cart');
    	$product = Package::find($id);
    	$newProduct = new Package();
        $newProduct->id = $product->id;
    	$newProduct->name = $product->name;
    	$newProduct->price = $product->price; 
    	$newProduct->discount = $product->discount; 
    	$newProduct->description = $product->description; 
    	array_push($cart['package'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }    

    //Insurance
    public function addInsurance($id){
    	$cart = \Session::get('cart');
    	$product = Insurance::find($id);
    	$newProduct = new Insurance();
        $newProduct->id = $product->id;
    	$newProduct->price = $product->price;
    	$newProduct->description = $product->description;
    	$newProduct->availability = $product->availability;
    	$newProduct->flight_id = $product->flight_id;
    	array_push($cart['insurance'], $newProduct);
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-purchases');
    }


    //Delete item
    public function deleteItem($key, $index)
    {
        $cart = \Session::get('cart');
        unset($cart[$key][$index]);
        \Session::put('cart', $cart);
        return redirect()->route('cart-purchases');
    }

    //Update item

    //Trash cart
    public function thrashCart()
    {
        \Session::forget('cart');
        return redirect()->route('cart-purchases');
    }

    public function orderDetail()
    {
        
        $idUser = NULL;
        if (Auth::user()){
            $idUser = Auth::user()->id;
        }
        $cart = \Session::get('cart');


        $subtotal = $this->total();
        $total = 0;
        foreach ($subtotal as $subtotalProduct) {
            $total += array_sum($subtotalProduct);
        }
        \Session::put('subtotal', $subtotal);
        $this->pay();
        return view('orderDetail', compact('cart', 'total', 'subtotal', 'idUser', 'reserve'));
    }

    public function pay(){
        $idUser = NULL;
        if (Auth::user()){
            $idUser = Auth::user()->id;
        }
        $cart = \Session::get('cart');
        foreach ($cart as $key => $products) {
            if($key == 'activity'){
                foreach ($products as $activity) {
                    $reserve = new Reserve();
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=$activity->kidsCapacity + $activity->adultsCapacity;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$activity->kidsCapacity * $activity->kidPrice + $activity->adultsCapacity * $activity->adultPrice;
                    $reserve->save();
                    $reserve->activities()->attach($activity->id);
                }
            }
            if($key == 'vehicle'){
                foreach ($products as $vehicle) {
                    $reserve = new Reserve();
                    Log::info("CONSOLA: reserve id: ".$reserve->id);
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=1;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$vehicle->price * $vehicle->type;
                    $reserve->save();
                    $reserve->vehicles()->attach($vehicle->id);
                }
            }
            if($key == 'room'){
                foreach ($products as $room) {
                    $reserve = new Reserve();
                    Log::info("CONSOLA: reserve id: ".$reserve->id);
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=1;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$room->price * $room->type;
                    $reserve->save();
                    $reserve->rooms()->attach($room->id);
                }
            }
            if($key == 'transfer'){
                foreach ($products as $transfer) {
                    $reserve = new Reserve();
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=1;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$transfer->price;
                    $reserve->save();
                    $reserve->transfers()->attach($transfer->id);
                }
            }
            if($key == 'flight'){
                foreach ($products as $flight) {
                    $reserve = new Reserve();
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=1;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$flight->price;
                    $reserve->save();
                    $reserve->flights()->attach($flight->id);
                }
            }
            if($key == 'package'){
                foreach ($products as $package) {
                    $reserve = new Reserve();
                    $reserve->date=Carbon::now();
                    $reserve->completed="true";
                    $reserve->amount=1;
                    $reserve->user_id=$idUser;
                    $reserve->payment_method_id=1;
                    $reserve->price=$package->price;
                    $reserve->save();
                    $reserve->packages()->attach($package->id);
                }
            }
        }
        \Session::forget('cart');

    }



    //Total
    private function total()
    {
    	$cart = \Session::get('cart');
    	$subtotal = array("room" => array(), "activity" => array(), "flight" => array(), "vehicle" => array(), "transfer" => array(), "insurance" => array(),"package" => array());
    	foreach ($cart as $key => $products) {
    		if($key == 'room'){
    			$i = 0;
    			foreach ($products as $room) {
    				$startDate = new DateTime($room->startDate);
        			$endDate = new DateTime($room->endDate);
        			$nights = $startDate->diff($endDate);
        			$amount = data_get($nights, 'days');
        			$sub = $room->type * $room->price;
        			array_push($subtotal[$key], $sub);
        			$i++;
    			}
    		}
    		else if ($key == 'vehicle') {
    			$i = 0;
    			foreach ($products as $vehicle) {
    				$startDate = new DateTime($vehicle->startDate);
    				$endDate = new DateTime($vehicle->endDate);
    				$days = $startDate->diff($endDate);
    				$amount = data_get($days, 'days');
    				$sub = $vehicle->type * $vehicle->price;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}
    		else if($key == 'activity'){
    			$i = 0;
    			foreach ($products as $activity) {
    				$sub = $activity->adultPrice * $activity->adultsCapacity + $activity->kidPrice * $activity->kidsCapacity;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}
    		else if($key == 'transfer'){
    			$i = 0;
    			foreach ($products as $transfer) {
    				$sub = $transfer->price;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}
    		
    		else if($key == 'flight'){
    			$i = 0;
    			foreach ($products as $flight) {
    				$sub = $flight->price;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}

    		else if($key == 'insurance'){
    			$i = 0;
    			foreach ($products as $insurance) {
    				$sub = $insurance->price;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}
    		else if($key == 'package'){
    			$i = 0;
    			foreach ($products as $package) {
    				$sub = $package->price;
    				array_push($subtotal[$key], $sub);
    				$i++;
    			}
    		}
    	}
    	return $subtotal;
    }
}
