@extends('layouts.app')

@section('content')
<div class="container" >
  <h1 style="text_aligne:center;">Estoy en {{Auth::user()->ubicacion}}</h1>
  <div   style="position:relative" width='500px'>
    <div class="">
     <img  style="position:relative"src="images/planisferio.jpg" width='100%' alt="">
    <div   style="background-color:red;position:absolute;left:33%; top:64%" > ACA </div></div>
  </div>
</div>
@endsection
