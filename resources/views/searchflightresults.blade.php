@extends('layouts.app')

@section('content')
<head>
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Author Meta -->
        <meta name="author" content="Colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Latravel</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<div class="background">
    <div><p><br/><br/><br/><br/></p></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
					@if (count($results) > 0)

						@foreach($results as $result)
							<form action="/cart/add/flight/" method="post">
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
											<div>
											<input class="form-control" type="text" name="id_vuelo" placeholder="carId" id="id_vuelo" value="{{$result->id}}" style="display: none">
											</div>
											<div>
											<input class="form-control" type="text" name="typeOfSeat" placeholder="carId" id="typeOfSeat" value="{{$typeOfSeat}}" style="display: none">
											</div>
								                <a href="/cart/add/flight/">
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

				            <div class="card-body">
				                <h4 class="card-title">No se han encontrado resultados.</h4>
				                <a href="{{route('searchflight')}}">
				                <button type="button" class="btn btn-primary btn-md">Realizar otra búsqueda</button>
				            </a>

				            </div>

					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

