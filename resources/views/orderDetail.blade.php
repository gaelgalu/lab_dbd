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
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Comprar productos!') }}</div>
                <div class="card-body">


                	<div class="form-group row">
                        <label for="bank" class="col-md-4 col-form-label text-md-right">{{ __('Banco') }}</label>
                        <div class="col-md-6">
                            <input id="bank" type="text" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" name="bank" value="{{ old('bank') }}" required>
                        </div>
                        @if ($errors->has('bank'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bank') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="typeOfAccount" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de cuenta') }}</label>
                        <div class="col-md-6">
                            <input id="typeOfAccount" type="text" class="form-control{{ $errors->has('typeOfAccount') ? ' is-invalid' : '' }}" name="typeOfAccount" value="{{ old('typeOfAccount') }}" required>
                        </div>
                        @if ($errors->has('typeOfAccount'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('typeOfAccount') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="bankAccountNumber" class="col-md-4 col-form-label text-md-right">{{ __('Número de cuenta') }}</label>
                        <div class="col-md-6">
                            <input id="bankAccountNumber" type="number" min="0" class="form-control{{ $errors->has('bankAccountNumber') ? ' is-invalid' : '' }}" name="bankAccountNumber" value="{{ old('bankAccountNumber') }}" required>
                        </div>
                        @if ($errors->has('bankAccountNumber'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bankAccountNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group row mb-0">
                        <div class="banner-content col-lg-12 col-md-12">
                            <a href="{{ route('pay') }}" class="head-btn btn text-uppercase">Ir a pagar</a>
                        </div>
                    </div>


                </div>
			</div>
		</div>
	</div>
</div>



@endsection