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
    @foreach($packages as $package)
        <form action="/packages/{{$package->id}}" method="get">
            {{ csrf_field() }}
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-4">
                        <img class="card-img-top img-fluid " src="{{URL::asset('/img/package.png')}}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Nombre del paquete: "{{$package->name}}" Precio: ${{$package->price}}</h4>
                            <a href="{{url('/reserve/flight/')}}">
                                 <button type="submit" class="btn btn-primary btn-md">Ver contenido del paquete</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endforeach
@endsection