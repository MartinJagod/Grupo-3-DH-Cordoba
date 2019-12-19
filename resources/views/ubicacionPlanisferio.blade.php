@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-9">

  <h4 style="text-align:center;">Upa!!! Estas en {{$solicitar->ubicacion}} a {{round($solicitar->distancia)}}Km de la plaza San Martin de Cordoba</h4>

  </div>

  <div class="col-3">

  <a id="Notificaciones" href="/UbicacionMundial">
  <button style="margin:10px;" type="btn" class="btn btn-success" name="button">Te moviste de lugar?</button>
  </a>

  </div>
</div>

  <div   style="position:relative" width='500px'>
    <div class="">
     <img style="position:relative" src="images/planisferio.jpg" width='100%' alt="">
    <div  width='5px' height='5px' style="background-color:red; position:absolute;left:46.33%;top:71.11%;" > ACA </div></div>
  </div>

{{-- <p>{{href="buscarPais,{{Auth::user()->ubicacion}}"}}</p> --}}
</div>
@endsection
