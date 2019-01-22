<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
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
   <div class="form-group">
    <select name="DestinyCity" id="DestinyCity" class="form-control input-lg dynamic" data-dependent="city">
     <option value="">Select Destiny City</option>
    </select>
   </div>
   <br />
{{--    <div class="form-group">
    <select name="city" id="city" class="form-control input-lg">
     <option value="">Select City</option>
    </select>
   </div> --}}
   {{ csrf_field() }}
   <br />
   <br />
  </form>
   <button type="submit" form="form1">hola</button>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#OriginCity').change(function(){
  $('#DestinyCity').val('');
 });
 

});
</script>