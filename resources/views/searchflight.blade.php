@extends('layouts.app')

@section('content')
<div class="card bg-light">
    <div class="card-header">
        <h2> Busca tu vuelo</h2>
    </div>
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
                <div class="col-3 form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="tipo_vuelo" id="vuelo_ida_vuelta" value="1">
                    <label for="vuelo_ida_vuelta" class="form-check-label">Ida y vuelta</label>
                </div>

                <div class="col-3 form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="tipo_vuelo" id="vuelo_solo_ida" value="0" checked>
                    <label for="vuelo_solo_ida" class="form-check-label">Solo ida</label>
                </div>
            </div>

            

            <div class="form-group form-row align-items-end">
                <div class="col">
                    <label for="fecha_ida">Fecha Ida</label>

                    <div>
                        <input class="form-control" type="date" name="departureDate" placeholder="Fecha de ida" id="departureDate" onkeydown="return false" required>
                    </div>
                </div>

                <div class="col">
                    <label for="fecha_vuelta" class="vuelo-vuelta">Fecha Vuelta</label>
                    <div class="input-group vuelo-vuelta">
                        <input type="date" id="fecha_vuelta" name="fecha_vuelta" class="form-control text-center datepicker fecha-termino" value="" onkeydown="return false">
{{--                         <span class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </span> --}}
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Busca tu vuelo</button>
        </form>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("departureDate")[0].setAttribute('min', today);

</script>
  @endsection