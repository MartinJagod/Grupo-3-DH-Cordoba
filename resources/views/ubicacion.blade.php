@extends('layouts.app')

@section('content')

  <div class="container">
    <img class="img-fluid" alt="Responsive image" src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:40%; margin-bottom: 50px; margin-top: 20px;" />

    <p>
          <h3 style="margin-top: 10%; text-align: center;">Por donde andai????</h3>
            <form class=""  style="margin-top: 5%; text-align: center;" name="ubicacion" accion="/UbicacionMundial@distanceCalculation" method="post">
{{ csrf_field() }}
      <select class="selectpicker"  name="ubicacion" title="Ubicacion en el mundo" >
        @foreach ($paisesArray as $value)
          <option>{{$value['name']}}</option>
        @endforeach
      </select>
      <button type="submit" name="button"> Aca estoy!!!</button>
    </form>

@endsection
