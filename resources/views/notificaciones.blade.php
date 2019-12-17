@extends('layouts.app')

@section('content')
{{-- Esto muestra las solicitudes de amistar y podes Aceptar o Rechazar--}}

<body>
<div class="container espaciado">
{{-- <div class="row">
<div class="col-md-12"> --}}


<!-- ESTO ES CANVAS IZQUIERDO -->

<div class="row">
<div class="col-md-3" style="min-height: 80vh;">
  <img class="img-fluid" alt="Responsive image" src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />
      {{-- <ul class="list-unstyled">
          <li class="list-item">
          	<a class="btn btn-link" href="#" >
          	<h5><i class="fas fa-home"></i> Fotos</h5>
          	</a>
          </li>
              <li class="list-item">
              <a class="btn btn-link" href='/notificacion'>
              <h5><i class="fas fa-bell"></i>  Notificaciones</h5>
            </a>
          </li>
          </ul> --}}
</div>


<!-- ESTO ES CANVAS CENTRAL -->

{{-- <div class="row"> --}}
<div class="col-md-7">

  <div class="container" style="margin-top: 15%">
    <h3 style="margin-top: 5%; text-align: center;">  Hora de tomar decisiones:</h3>

    <ul>
          @forelse ($amigo as $value)
            @if (isset ($amigo))
            <li>
              {{-- <a class="btn btn-outline-success" href="/respuestasolicitud/{{1}}/{{$value->id}}" role="button">{{ucfirst($value->name)}} {{ucfirst($value->surname)}} quiere ser tu amigo ACEPTAR</a> --}}
<div class="row " style="margin: 15px;">
  <p> {{ucfirst($value->name)}} {{ucfirst($value->surname)}} quiere ser tu amigo  </p>
  <a class="btn btn-outline-success"  style="margin: 10px;" href="/respuestasolicitud/{{1}}/{{$value->id}}" role="button">BIEN AHI!!</a>
  <a class="btn btn-outline-danger" style="margin: 10px;" href='/respuestasolicitud/{{2}}/{{$value->id}}' role="button">VOLA DE ACA!!</a>

</div>

            @endif
          @empty
      <p> No tenes notificaciones </p>
          @endforelse
  </ul>
        </div>


</div>


<!-- ESTO ES CANVAS DERECHO -->
<div class="col-md-2 ">
  <div class="justify-content-sm-end">
      <nav class="navbar " >
        <img class="img-fluid justify-content-sm-start" alt="Responsive image" src="/images/tglobo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />
        {{-- <form class="form-inline" type="get" action="{{route('friendship')}}" name="buscador">
        <input class="form-control justify-content-sm-end" id="buscador" type="search" name="buscador" placeholder="Ej. La Mona" aria-label="Search" >
        <button class="btn btn-warning botonBuscar d-flex flex-row-reverse"  style=" color: white; background-color: #ff6000; margin-bottom: 10px;"   type="submit">Buscar Amigos</button> --}}
        </form>
      </nav>
</div>
</div>
</div>

</div>
</div>
</div>
</body>








  @endsection
