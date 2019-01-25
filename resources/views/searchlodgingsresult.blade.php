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
						@for($i = 0; $i<count($results); $i++)
						<div class="container">
					    <div class="card-deck">
					        <div class="card mb-4">
					            <img class="card-img-top img-fluid" src="{{URL::asset('/img/lodging.png')}}" alt="Card image cap">
				            <div class="card-body">
				                <h4 class="card-title">Nombre del hotel: {{$lodgings[$i]->name}} Ciudad: {{$city}} Precio: ${{$results[$i]->price}}</h4>
				                <p class="card-text">Número de habitación: {{$results[$i]->doorNumber}}</p>
				                <p class="card-text">Fecha de llegada al hotel: {{$startDate}}</p>
				                <p class="card-text">Fecha de salida del hotel: {{$endDate}}</p>
				                <p class="card-text">Capacidad: {{$results[$i]->adultsCapacity}}</p>
								<a href="/cart/add/room/{{$results[$i]->id}}/{{$startDate}}/{{$endDate}}">
					               	 <button type="submit" class="btn btn-primary btn-md">Agregar al carrito</button>
					            </a>
				            </div>
				        </div>
				    </div>

						@endfor

					@else
			            <div class="card-body">
			                <h4 class="card-title">No se han encontrado resultados en base a los criterios dados :(.</h4>
			                <div class="form-group row mb-0">
                            	<div class="banner-content col-lg-12 col-md-12">
					                <a href="{{route('searchhotel')}}">
					                <button type="button" class="head-btn btn text-uppercase">Realizar otra búsqueda</button>
					           		</a>
					           	</div>
						    </div>
			            </div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

