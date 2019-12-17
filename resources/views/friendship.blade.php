@extends('layouts.app')

@section('content')

  <body>
  <div class="container espaciado">
  {{-- <div class="row">
  <div class="col-md-12"> --}}


  <!-- ESTO ES CANVAS IZQUIERDO -->

  <div class="row">
  <div class="col-md-3 minheight">
    <img class="img-fluid" alt="Responsive image" src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />
        {{-- <ul class="list-unstyled" style="min-height: 80vh;">
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
      <h3 style="margin-top: 5%; text-align: center;">  Mis Amistades:</h3>

        <ul>
          @forelse($friend as $frien)

          @if(Auth::user()->id!==$frien->id)
            <li>
                @if ($frien->status==9)
                  {{-- <a class="btn btn-outline-success" href='/solicitud/{{$frien->id}}' role="button"> {{ucfirst($frien->name)}} 'Ya son amigos'</a> --}}
                  <p href='/solicitud/{{$frien->id}}'> Con {{ucfirst($frien->name)}} {{ucfirst($frien->surname)}} ya son amigos</p>

                @else

                  <a class="btn btn-outline-primary" href='/solicitud/{{$frien->id}}' role="button"> {{ucfirst($frien->name)}} {{ucfirst($frien->surname)}}</a>
                @endif
              </li>
            @endif
          @empty
            <p>      No encontramos a la persona que buscas    </p>
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

{{-- <div class="container-fluid  col-md-12 banner principallogin ">
  <div class="row col-md-12 banner ">

    <div class=" container col-md-4 fondoGris">

      <form role="form" action= "validar.php" method='post' >
        <div class="form-group">
          <label for="exampleInputEmail1">
            Direccion de Email
          </label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">

          <label for="exampleInputPassword1">
            Password
          </label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>

    <div class="container shadow p-3 mb-5 bg-white rouded col-md-4 ">
      <address>
        <img class="col-12 banner " alt="Bootstrap Image" src="img/logo1.jpg" />
        <br>
         <strong>Coordobeses, Inc.</strong><br /> Jose Baigorri 653.<br /> Cordoba, X5001AJM<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
    </div>
  </div>

</div> --}}
