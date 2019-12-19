@extends('layouts.app')

@section('content')
<div class="container" >
  <h1 style="text_aligne:center;">Estas en {{$solicitar->ubicacion}} a {{round($solicitar->distancia)}}Km de la plaza San Martin de Cordoba</h1>
  <div   style="position:relative" width='500px'>
    <div class="">
     <img style="position:relative" src="images/planisferio.jpg" width='100%' alt="">
    <div  width='5px' height='5px' style="background-color:red; position:absolute;left:46.33%;top:71.11%;" > ACA </div></div>
  </div>
  <ul>
  <li class="list-item">
      <a class="btn btn-link" id="Notificaciones" href="/UbicacionMundial">
      <h5><i class="fas fa-user-circle"></i>Te moviste de lugar?</h5>
      </a>
 </li>
</ul>
{{-- <p>{{href="buscarPais,{{Auth::user()->ubicacion}}"}}</p> --}}
</div>
@endsection
