@extends('layouts.app')

@section('content')

<head>
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
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
    @foreach($vehicles as $vehicle)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Vehículo: "{{$vehicle->brand}}" </h4>
                            <p class="card-text">Patente: {{$vehicle->patent}}</p>
                            <p class="card-text">Capacidad: {{$vehicle->capacity}}</p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    @foreach($rooms as $room)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Habitación: "{{$room->doorNumber}}" Hotel: {{$room->lodging->name}}</h4>
                            <p class="card-text">Ciudad: {{$room->lodging->adress->city}}</p>
                            <p class="card-text">Capacidad: {{$room->adultsCapacity}}</p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    @foreach($activities as $activity)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Actividad: "{{$activity->name}}"</h4>
                            <p class="card-text">Descripción: {{$activity->description}}</p>
                            <p class="card-text">Capacidad: {{$activity->adultsCapacity + $activity->kidsCapacity}}</p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    @foreach($flights as $flight)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Código vuelo: "{{$flight->code}}"</h4>
                            <p class="card-text">Ciudad Origen: {{$flight->airports->find($flight->origin)->adress->city}}</p>
                            <p class="card-text">Ciudad Destino: {{$flight->airports->find($flight->destiny)->adress->city}}</p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    @for($i = 0; $i<count($transfers); $i++)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Traslado: "{{$transfers[$i]->name}}"</h4>
                            <p class="card-text">Ciudad de inicio del traslado: {{$originCities[$i]}}</p>
                            <p class="card-text">Ciudad de fin del traslado: {{$destinationCities[$i]}}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
    <div class="container">
        <div class="card-deck">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Precio del paquete: ${{$package->price}}</h4>
                    <p class="card-text">Descripción: {{$package->description}}</p>
                    <a href="/cart/add/package/{{$package->id}}">
                     <button {{-- type="submit" --}} class="btn btn-primary btn-md">Agregar paquete al carrito</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection