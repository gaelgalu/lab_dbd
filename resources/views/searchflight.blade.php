@extends('layouts.app')

@section('content')}
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
                    <div class="card-header">{{ __('Busca tu vuelo!') }}</div>
                    <div class="card-body">
                        <form action="/searchflight/results" method="post">
                            {{ csrf_field() }}

                            <div class="form-group form-row align-items-end">
                                <div class="col">
                                    <label for="origen_id">Origen</label>
                                    <div class="form-group">
                                        <select id="origen_id" name="origen_id" class="form-control selectpicker" title="Origen" data-live-search="true">

                                            @foreach ($adresses as $adress)
                                                <option>{{$adress->city}}</option>
                                            @endforeach                            

                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="destino_id">Destino</label>
                                    <div class="form-group">
                                        <select id="destino_id" name="destino_id" class="form-control selectpicker" title="Destino" data-live-search="true">

                                            @foreach ($adresses as $adress)
                                                <option>{{$adress->city}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-row align-items-end">
                                <div class="col">
                                    <label for="fecha_ida">Fecha Ida</label>

                                    <div>
                                        <input class="form-control" type="date" name="departureDate" placeholder="Fecha de ida" id="departureDate" onkeydown="return false" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="banner-content col-lg-12 col-md-12">
                                    <button type="submit" class="head-btn btn text-uppercase">Busca tu vuelo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("departureDate")[0].setAttribute('min', today);

</script>
  @endsection