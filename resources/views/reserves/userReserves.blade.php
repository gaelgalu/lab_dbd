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
    <div class="container text-center">
        <div class="page-header">
            <h1>Reservas</h1>
            <div><p><br/></p></div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" align="center">Fecha de reserva</th>
                    <th scope="col" align="center">Producto</th>
                    <th scope="col" align="center">Especificación</th>
                    <th scope="col" align="center">Precio</th>
                    <th scope="col" align="center">Fecha inicio</th>
                    <th scope="col" align="center">Fecha finalización</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reserveUser as $reserve)
                    @if(!is_null($reserve->activities->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>actividad</td>
                            <td>{{$reserve->activities->first()->name}}</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @elseif(!is_null($reserve->seats->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>vuelo</td>
                            <td>Número de asiento:{{$reserve->seats->first()->code}}
                                del vuelo {{$reserve->seats->first()->flight->code}}</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @elseif(!is_null($reserve->vehicles->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>vehículo</td>
                            <td>{{$reserve->vehicles->first()->model}}</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @elseif(!is_null($reserve->rooms->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>habitación</td>
                            <td>Alojamiento: {{$reserve->rooms->first()->lodging->name}}
                                Habitación: {{$reserve->rooms->first()->doorNumber}}</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @elseif(!is_null($reserve->packages->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>paquete</td>
                            <td>{{$reserve->packages->first()->name}}</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @elseif(!is_null($reserve->transfers->first()))
                        <tr>
                            <td>{{$reserve->date}}</td>
                            <td>traslado</td>
                            <td>{{$reserve->transfers->first()->brand}} de modelo {{ $reserve->transfers->first()->model }} con capacidad para {{ $reserve->transfers->first()->capacity}} personas</td>
                            <td>${{$reserve->price}}</td>
                            <td>{{$reserve->startDate}}</td>
                            <td>{{$reserve->endDate}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection