@extends('layouts.app')

@section('content')
{{-- Esto muestra las solicitudes de amistar y podes Aceptar o Rechazar--}}
<div class="container">
  <ul>
        @forelse ($amigo as $value)
          @if (isset ($amigo))
          <li>
            <a class="btn btn-outline-success" href="/respuestasolicitud/{{1}}/{{$value->id}}" role="button">{{ucfirst($value->name)}} {{ucfirst($value->surname)}} quiere ser tu amigo ACEPTAR</a>
                        <a class="btn btn-outline-danger" href='/respuestasolicitud/{{2}}/{{$value->id}}' role="button">RECHAZAR</a>

          @endif
        @empty
    <p> No tenes notificaciones </p>
        @endforelse
</ul>
      </div>
  @endsection
