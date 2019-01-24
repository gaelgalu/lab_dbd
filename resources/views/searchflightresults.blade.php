@extends('layouts.app')

@section('content')

@if (count($results) > 0)

	@foreach($results as $result)
	<form action="/reserva/vuelo" method="post">
        {{ csrf_field() }}
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">
		            <img class="card-img-top img-fluid" src="{{URL::asset('/img/plane.png')}}" alt="Card image cap">

		            <div class="card-body">
		                <h4 class="card-title">Código de avión: {{$result->code}} (Ciudad de origen: {{$origin}} | Ciudad de destino: {{$destination}})</h4>
		                <p class="card-text">Fecha y hora de salida: {{$result->departureDate . " " . $result->departureTime}}</p>
		                <p class="card-text">Fecha y hora de llegada: {{$result->arrivalDate . " " . $result->arrivalTime}}</p>
		                <p class="card-text">Asientos disponibles: {{$result->seatAmount}}</p>
                            <div class="form-group form-row align-items-end">
				                <div class="col">
				                    <label>Pasajeros</label>
				                    <div class="row">
				                        <div class="col input-group">
				                            <input type="number" name="pasajeros_adultos" class="form-control text-right" value="1" min="1" max="5" onkeydown="return false">
				                            <div class="input-group-append">
				                                <span class="input-group-text">Adultos</span>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-1"></div>
				                <div class="col">
				                    <label for="">Tipo Pasaje</label>
				                    <select name="tipo_pasaje" class="form-control">

				                    	<option>Economy</option>
				                    	<option>Premium Economy</option>
				                    	<option>Premium Business</option>

				                    </select>
				                </div>
				                <input id="fligth_id" name="flight_id" type="hidden" value="{{$result->id}}">
			                <a href="{{url('/reserve/flight/')}}">
			               	 <button type="submit" class="btn btn-primary btn-md">Iniciar proceso reserva</button>
			            	</a>
				        </div>

		            </div>
		        </div>
		    </div>
		</div>
	</form>

	@endforeach

@else
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">

		            <div class="card-body">
		                <h4 class="card-title">No se han encontrado resultados.</h4>
		                <a href="{{route('searchflight')}}">
		                <button type="button" class="btn btn-primary btn-md">Realizar otra búsqueda</button>
		            </a>

		            </div>
		        </div>
		    </div>
		</div>


@endif

@endsection

