@extends('layouts.app')

@section('content')
<div class="container" >
  <h1 style="text_aligne:center;">Estas a {{round($distance)}}Km de la plaza San Martin de Cordoba</h1>
  <div   style="position:relative" width='500px'>
    <div class="">
     <img  src="images/planisferio.jpg" width='100%' alt=""></div>
    <div  width='5px' height='5px' style="background-color:red; position:absolute;left:46.33%;top:71,11%;" > ACA </div>
  </div>
</div>
@endsection
