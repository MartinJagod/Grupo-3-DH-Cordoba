@extends('layouts.app')

@section('content')

  <div class="container">
    <p>
      <label for ='pais'>Donde estas: </label>
      <br>
      
      <form class="" name="ubicacion" accion="/UbicacionMundial@distanceCalculation" method="post">
{{ csrf_field() }}
      <select class="selectpicker"  name="ubicacion" title="Ubicacion en el mundo" >
        @foreach ($paisesArray as $value)
          <option>{{$value['name']}}</option>
        @endforeach
      </select>
      <button type="submit" name="button"> Aca estoy!!!</button>
    </form>

@endsection
