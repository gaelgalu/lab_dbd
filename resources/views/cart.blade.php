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

<body>
<div class="background">
    <div><p><br/><br/><br/><br/></p></div>
    <div class="container text-center">
    	<div class="page-header">
    		<h1>Carro de compras</h1>
            <div><p><br/></p></div>
    	</div>
    	@if(count($cart['vehicle']) > 0  || count($cart['activity']) > 0 || count($cart['room']) > 0 ||  count($cart['flight']) > 0 || count($cart['transfer']) > 0 || count($cart['insurance']) > 0 || count($cart['package']) > 0)
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th scope="col" align="center">Producto</th>
                    <th scope="col" align="center">Especificación</th>
    				<th scope="col" align="center">Precio</th>
            	    <th scope="col" align="center">Cantidad</th>
        	        <th scope="col" align="center">Subtotal</th>
     	    	    <th scope="col" align="center">Quitar</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($cart as $password => $products)
                        @if($password === "room")
                            @for($i = 0; $i < count($products); $i++)
                                    <tr>
                                        <td>habitación</td>
                                        <td>Alojamiento: {{$products[$i]->lodging->name}}
                                            Habitación: {{$products[$i]->doorNumber}}</td>
                                        <td>${{ $products[$i]->price }} por noche</td>
                                        <td>Por {{ $subtotal[$password][$i] / $products[$i]->price }} noches</td>
                                        <td> ${{ $subtotal[$password][$i] }}</td>
                                        <td align="center">
                                            <div class="banner-content col-lg-12 col-md-12">
                                                <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            @endfor
                        @elseif($password === "activity")
                            @for($i = 0; $i < count($products); $i++)
                                    <tr>
                                        <td>actividad</td>
                                        <td>{{$products[$i]->name}}</td>
                                        <td>Adultos: ${{ $products[$i]->adultPrice}}
                                        Niños: ${{$products[$i]->kidPrice}} </td>
                                        <td>Para {{ $products[$i]->kidsCapacity }} niños y {{ $products[$i]->adultsCapacity}} adultos</td>
                                        <td>${{ $subtotal[$password][$i] }}</td>
                                        <td align="center">
                                            <div class="banner-content col-lg-12 col-md-12">
                                                <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                 
                            @endfor
                        @elseif($password === "vehicle")
                            @for($i = 0; $i < count($products); $i++)
                                <tr>
                                    <td>vehículo</td>
                                    <td>{{$products[$i]->model}}</td>
                                    <td>${{ $products[$i]->price }} por dia</td>
                                    <td>Capacidad para {{ $products[$i]->capacity}} personas</td>
                                    <td>${{ $subtotal[$password][$i] }}</td>
                                    <td align="center">
                                        <div class="banner-content col-lg-12 col-md-12">
                                            <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        @elseif($password === "flight")
                            @for($i = 0; $i < count($products); $i++)
                                
                                    <tr>
                                        <td>vuelo</td>
                                        <td>{{$products[$i]->name}}</td>
                                        <td>${{ $products[$i]->price }} por persona</td>
                                        <td></td>
                                        <td> ${{ $subtotal[$password][$i] }}</td>
                                        <td align="center">
                                            <div class="banner-content col-lg-12 col-md-12">
                                                <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                               
                            @endfor
                         @elseif($password === "transfer")
                            @for($i = 0; $i < count($products); $i++)
                                <tr>
                                    <td>traslado</td>
                                    <td>{{$products[$i]->brand}} de modelo {{ $products[$i]->model }} con capacidad para {{ $products[$i]->capacity}} personas</td>
                                    <td> ${{ $products[$i]->price }} por persona</td>
                                    <td>1</td>
                                    <td> ${{ $subtotal[$password][$i] }}</td>
                                    <td align="center">
                                        <div class="banner-content col-lg-12 col-md-12">
                                            <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        @elseif($password === "insurance")
                            @for($i = 0; $i < count($products); $i++)
                                <tr>
                                    <td>seguro</td>
                                    <td>{{$products[$i]->description}}</td>
                                    <td>${{ $products[$i]->price }} por persona</td>
                                    <td>1</td>
                                    <td> ${{ $subtotal[$password][$i] }}</td>
                                    <td align="center">
                                        <div class="banner-content col-lg-12 col-md-12">
                                            <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor    
                        @elseif($password === "package") <!--package-->
                            @for($i = 0; $i < count($products); $i++)
                                <tr>
                                    <td>paquete</td>
                                    <td>{{$products[$i]->name}}</td>
                                    <td>${{ $products[$i]->price }} por persona</td>
                                    <td>1</td>
                                    <td> ${{ $subtotal[$password][$i] }}</td>
                                    <td align="center">
                                        <div class="banner-content col-lg-12 col-md-12">
                                            <a href="/cart/deleteItem/{{$password}}/{{$i}}" class="head-btn btn text-uppercase"><i class="lnr lnr-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        @endif
    			@endforeach
    		</tbody>
            </table>
            <hr>
                <h3>
                    <span class="label label-success">
                        Total: ${{$total}}
                    </span>
                </h3>
            <hr>
            <p>
                <div class="col-md-12 d-flex">
                    <div class="banner-content col-lg-4 col-md-12 text-md-right">
                        <a href="/cart/thrashCart" class="head-btn btn text-uppercase">Vaciar carro de compras</a>
                    </div>
                    <div class="banner-content col-lg-4">
                        <a href="/" class="head-btn btn text-uppercase">Seguir comprando</a>
                    </div>
                    <div class="banner-content col-lg-4 col-md-12 text-md-left">
                        <a href="{{ route('orderDetail') }}" class="head-btn btn text-uppercase">Ir a pagar</a>
                    </div>
                </div>
            </p>


            @else
                <h3>
                    <span class="label label-warning">El carro de compras está vacío</span>
                </h3>
            @endif
        </div>
    </div>
</body>
@endsection