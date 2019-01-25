@extends('layouts.app')

@section('content')

@if (count($results) > 0)

	@for($i = 0; $i<count($results); $i++)
	<form action="#" method="post">
        {{ csrf_field() }}
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">
		            <img class="card-img-top img-fluid " src="{{URL::asset('/img/lodging.png')}}" alt="Card image cap">

		            <div class="card-body">
		                <h4 class="card-title">Nombre del hotel: {{$lodgings[$i]->name}} Ciudad: {{$city}} Precio: ${{$results[$i]->price}}</h4>
		                <p class="card-text">Número de habitación: {{$results[$i]->doorNumber}}</p>
		                <p class="card-text">Fecha de llegada al hotel: {{$startDate}}</p>
		                <p class="card-text">Fecha de salida del hotel: {{$endDate}}</p>
		                <p class="card-text">Capacidad: {{$results[$i]->adultsCapacity}}</p>
						<a href="{{url('/reserve/flight/')}}">
			               	 <button type="submit" class="btn btn-primary btn-md">Agregar al carrito</button>
			            </a>
		            </div>
		        </div>
		    </div>
		</div>
	</form>

	@endfor

@else
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">

		            <div class="card-body">
		                <h4 class="card-title">No se han encontrado resultados en base a los criterios dados :(.</h4>
		                <a href="{{route('searchhotel')}}">
		                <button type="button" class="btn btn-primary btn-md">Realizar otra búsqueda</button>
		            </a>

		            </div>
		        </div>
		    </div>
		</div>


@endif

@endsection

