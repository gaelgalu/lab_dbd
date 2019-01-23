@extends('layouts.app')

@section('content')
<script>
function handleOnChangeActivityProviderId(){
    var x = document.getElementById("activity_provider_id").value;
    document.getElementById("activity_provider_id").value = x;
}

function handleOnClickAvailability(x){
    if(x == "1"){
        document.getElementById("availabilityUnchecked").value = "0";
        console.log("0");   

    }
    if(x == "0"){
        document.getElementById("availabilityUnchecked").value = "1";
        console.log("1");

    }
}
</script>

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
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registra una actividad!') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('activities.store') }}">
                            @csrf
                            <div class="card-header bg-transparent">Datos propios del evento</div>
                            <p><br/></p>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del evento') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="startDate" class="col-md-4 col-form-label text-md-right">{{ __('Hora de inicio') }}</label>
                                <div class="col-md-6">
                                    <input id="startDate" type="text" class="form-control{{ $errors->has('startDate') ? ' is-invalid' : '' }}" name="startDate" value="<?php echo date('Y-m-d H:i:s'); ?>" pattern="^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|0?[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|0?[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])"  value="{{ old('startDate') }}" required>
                                </div>
                                @if ($errors->has('startDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('startDate') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="endDate" class="col-md-4 col-form-label text-md-right">{{ __('Hora de termino') }}</label>
                                <div class="col-md-6">
                                    <input id="endDate" type="text" class="form-control{{ $errors->has('endDate') ? ' is-invalid' : '' }}" name="endDate"  value="<?php echo date('Y-m-d H:i:s'); ?>" pattern="^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|0?[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|0?[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])" value="{{ old('endDate') }}" required>
                                </div>
                                @if ($errors->has('endDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('endDate') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="card-header bg-transparent">Capacidad y precio </div>
                            <p><br/></p>

                            <div class="form-group row">
                                <label for="adultsCapacity" class="col-md-4 col-form-label text-md-right">{{ __('Capacidad de adultes') }}</label>
                                <div class="col-md-6">
                                    <input id="adultsCapacity" type="number" min="0" class="form-control{{ $errors->has('adultsCapacity') ? ' is-invalid' : '' }}" name="adultsCapacity" value="{{ old('adultsCapacity') }}" required>
                                </div>
                                @if ($errors->has('adultsCapacity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adultsCapacity') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="adultPrice" class="col-md-4 col-form-label text-md-right">{{ __('Precio para adultes') }}</label>
                                <div class="col-md-6">


                                    <input id="adultPrice" type="number" min="0" value="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$
                                    " class="form-control{{ $errors->has('adultPrice') ? ' is-invalid' : '' }}" class="form-control{{ $errors->has('adultPrice') ? ' is-invalid' : '' }}"  name="adultPrice" value="{{ old('adultPrice') }}" required>
                                </div>
                                @if ($errors->has('adultPrice'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adultPrice') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="kidsCapacity" class="col-md-4 col-form-label text-md-right">{{ __('Capacidad de niñes') }}</label>
                                <div class="col-md-6">
                                    <input id="kidsCapacity" type="number" min="0" class="form-control{{ $errors->has('kidsCapacity') ? ' is-invalid' : '' }}" name="kidsCapacity" value="{{ old('kidsCapacity') }}" required>
                                </div>
                                @if ($errors->has('kidsCapacity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kidsCapacity') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="kidPrice" class="col-md-4 col-form-label text-md-right">{{ __('Precio para niñes') }}</label>
                                <div class="col-md-6">
                                    <input id="kidPrice" type="number" min="0" value="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$
                                    " class="form-control{{ $errors->has('adultPrice') ? ' is-invalid' : '' }}" class="form-control{{ $errors->has('kidPrice') ? ' is-invalid' : '' }}" name="kidPrice" value="{{ old('kidPrice') }}" required>
                                </div>
                                @if ($errors->has('kidPrice'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kidPrice') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="activity_provider_id" class="col-md-4 col-form-label text-md-right">{{ __('Proveedore') }}</label>

                                <div class="col-md-6">

                                    <select id="activity_provider_id" type="activity_provider_id" class="form-control{{ $errors->has('activity_provider_id') ? ' is-invalid' : '' }}" name="activity_provider_id" value="{{ old('activity_provider_id') }}" onchange="handleOnChangeActivityProviderId()" required>
                                        @foreach($providers as $provider)
                                            <option value={{$provider['id']}}>{{$provider['name']}}</option>
                                        @endforeach

                                    </select>

                                    @if ($errors->has('activity_provider_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('activity_provider_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-check">
                                <input type="hidden" id="availabilityUnchecked" class="form-check-input" name="availability" value="1" />
                                <input type="checkbox" name="availability" class="form-check-input" value="1" onclick="handleOnClickAvailability(this.value)" checked>
                                <label for="availability" class="form-check-label text-md-right">{{ __('Dejar disponible') }}</label>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="banner-content col-lg-12 col-md-12">
                                    <button type="submit" class="head-btn btn text-uppercase">
                                        {{ __('Registrar actividad') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection