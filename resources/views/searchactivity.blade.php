@extends('layouts.app')

@section('content')

<div class="card bg-light">
	<div class="card-header">
		<h2> Reserva tu hotel</h2>

	</div>
	<div class="card-body">
		<form action="/searchactivity/results" method="post">
			{{ csrf_field() }}
      
			<div class="form-group form-row align-items-end">
				<div class="col">
					<label for="ciudad">Ciudad de actividad</label>
					<div class="form-group">
						<select id="ciudad" name="ciudad" class="form-control selectpicker" title="Destino" data-live-search="true">

							@foreach($adresses as $adress)
								<option> {{$adress->city}} </option>
							@endforeach
							
						</select>
					</div>
				</div>
			</div>
				
			<div class="form-group form-row align-items-end">
				<div class="col">
					<label for="inicioActividad">Inicio de actividad</label>
					<div class="input-group">
						<input type="date" id="inicioActividad" name="inicioActividad" value="" required class="form-control text-center datepicker" onkeydown="return false" required>
						<span class="input-group-append">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</span>
					</div>
				</div>
			</div>
			
			<div class="form-group form-row align-items-end">
				<div class="col-5 col-sm-5">
					<label>Entradas adultos</label>
					<div class="row ">
						<div class="col input-group">
							<input type="number" name="capacidad_adultos" class="form-control text-center" value="1" min="1" max="7">
							<div class="input-group-append">
								<span class="input-group-text">Entradas</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-3 col-sm-2"></div>

				<div class="col-5 col-sm-5">
					<label>Entradas niños</label>
					<div class="row ">
						<div class="col input-group">
							<input type="number" name="capacidad_niños" class="form-control text-center" value="1" min="1" max="7">
							<div class="input-group-append">
								<span class="input-group-text">Entradas</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Busca tu actividad</button>
		</form>
	</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("inicioActividad")[0].setAttribute('min', today);

</script>

@endsection