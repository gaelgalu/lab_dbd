@extends('layouts.app')

@section('content')

@if (count($activities) > 0)

	@foreach($activities as $activity)
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">
		            <img class="card-img-top img-fluid " src="{{URL::asset('/img/activity.png')}}" alt="Card image cap">

		            <div class="card-body">
		                <h4 class="card-title">Nombre de la actividad: "{{$activity->name}}"" Ciudad: {{$activity->activityProvider->adress->city}} </h4>
		                <p class="card-text">Precio adultos: ${{$activity->adultPrice}}</p>
		                <p class="card-text">Precio niños: ${{$activity->kidPrice}}</p>
		                <p class="card-text">Fecha de inicio de la actividad: {{$activity->startDate}}</p>
		                <p class="card-text">Fecha de término de la actividad: {{$activity->endDate}}</p>
						<a href="/cart/add/activity/{{$activity->id}}/{{$numberOfKids}}/{{$numberOfAdults}}">
			               	 <button type="submit" class="btn btn-primary btn-md">Agregar al carrito</button>
			            </a>
		            </div>
		        </div>
		    </div>
		</div>

	@endforeach

@else
		<div class="container">
		    <div class="card-deck">
		        <div class="card mb-4">

		            <div class="card-body">
		                <h4 class="card-title">No se han encontrado resultados en base a los criterios dados :(.</h4>
		                <a href="{{route('searchactivities')}}">
		                <button type="button" class="btn btn-primary btn-md">Realizar otra búsqueda</button>
		            </a>

		            </div>
		        </div>
		    </div>
		</div>


@endif

@endsection