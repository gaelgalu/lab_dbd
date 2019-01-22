@extends('layouts.app')
@section('content')
  <br />
  <div class="container box">
  <form action="{{ route('testing') }}" method="POST" id="form1">
     @csrf
   <h3 align="center">Select travel cities</h3><br />
   <div class="form-group">
    <select name="OriginCity" id="OriginCity" class="form-control input-lg dynamic" data-dependent="DestinyCity">
     <option value="">Select Origin City</option>
     @foreach($adress_list as $adress)
     <option value="{{ $adress->city}}">{{ $adress->city }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="input-group mb-3">
    <select name="DestinyCity" id="DestinyCity" class="custom-select dynamic" data-dependent="city">
     <option value="">Select Destiny City</option>
    </select>
   </div>
   <br />
   {{ csrf_field() }}
   <br />
   <br />
  </form>
   <button type="submit" form="form1">hola</button>
  </div>
  @endsection