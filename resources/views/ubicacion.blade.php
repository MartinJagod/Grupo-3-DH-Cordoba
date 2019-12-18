@extends('layouts.app')

@section('content')

  <div class="container">
    <p>
      <label for ='pais'>Donde estas: </label>
      <br>
      <select class="selectpicker" name="ubicacion" title="Ubicacion en el mundo" >
        @foreach ($paisesArray as $value)
          <option>{{$value['name']}}</option>
        @endforeach
      </select>
@endsection
