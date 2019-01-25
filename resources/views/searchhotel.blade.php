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
                    <div class="card-header"><i class="fa fa-building"></i>  {{ __('Reserva tu hotel!') }}</div>
						<div class="card-body">
							<form action="/searchhotel/results" method="post">
								{{ csrf_field() }}
					      
								<div class="form-group form-row align-items-end">
									<div class="col">
										<label for="id_destino">Destino</label>
										<div class="form-group">
											<select id="destino_id" name="destino_id" class="form-control selectpicker" title="Destino" data-live-search="true">

												@foreach($adresses as $adress)
													<option> {{$adress->city}} </option>
												@endforeach
												
											</select>
										</div>
									</div>
								</div>
									
								<div class="form-group form-row align-items-end">
									<div class="col">
										<label for="fecha_entrada">Fecha Entrada</label>
										<div class="input-group">
											<input type="date" id="fecha_entrada" name="fecha_entrada" value="" required class="form-control text-center datepicker" onkeydown="return false" required>
											<span class="input-group-append">
												<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
											</span>
										</div>
									</div>
									
									<div class="col">
										<label for="fecha_salida">Fecha Salida</label>
										<div class="input-group">
											<input  type="date" id="fecha_salida" name="fecha_salida" value="" required class="form-control text-center datepicker" onkeydown="return false" required>
											<span class="input-group-append">
												<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
											</span>
										</div>
									</div>
								</div>
								
								<div class="form-group form-row align-items-end">
									<div class="col-5 col-sm-5">
										<label>Habitación</label>
										<div class="row ">
											<div class="col input-group">
												<input type="number" name="capacidad_adultos" class="form-control text-center" value="1" min="1" max="7">
												<div class="input-group-append">
													<span class="input-group-text">Capacidad</span>
												</div>
											</div>
										</div>
									</div>

									<div class="col-3 col-sm-2"></div>
								</div>
								<div class="form-group row mb-0">
                                	<div class="banner-content col-lg-12 col-md-12">
										<button type="submit" class="head-btn btn text-uppercase">Busca tu Hotel</button>
									</div>
								</div>
							</form>
						</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("fecha_entrada")[0].setAttribute('min', today);

</script>

@endsection