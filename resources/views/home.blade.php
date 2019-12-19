@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <body>

                    <!-- ESTO ES  HOME -->

                    <div class="container espaciado">
                    	<div class="row">
                        <div class="col-md-12">


        <!-- ESTO ES CANVAS IZQUIERDO -->

                <div class="row">
                    				<div class="col-md-3" style="min-height: 80vh;">
                              <img class="img-fluid" alt="Responsive image" src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />

{{-- LISTADO CON OPCIONES MENU IZQUIERDO --}}
              							<ul class="list-unstyled">

                              <li class="list-item">
                                  <a class="btn btn-link" id="perfil" href="#">
                                  <h5><i class="fas fa-user-circle"></i>fotos</h5>
                                  </a>
                              </li>

                              <li class="list-item">
                                  <a class="btn btn-link" id="Notificaciones" href="/notificacion">
                                  <h5><i class="fas fa-user-circle"></i>Notificaciones   @if($hayNoti) <img src="/images/noti.png" style="display:block; margin-left: 20px; float:right; width: 20px;"> @endif </h5>
                                  </a>
                                  {{-- @if (isset ($amigo)) @endif  @empty @endforelse  --}}
            							   </li>
                             <li class="list-item">
                                 <a class="btn btn-link" id="Notificaciones" href="/UbicacionMundial">
                                 <h5><i class="fas fa-user-circle"></i>Por donde andas?</h5>
                                 </a>
                            </li>



                              <li class="list-item">
                                <a class="btn btn-link" id="perfil" href="#">
                                <h5><i class="fas fa-user-circle"></i>Perfil</h5>
                                </a>
            					        </li>

                          </div>


                   <!-- aqui va el post -->

					     <posts></posts>



                    <!-- ESTO ES CANVAS DERECHO -->
                    <div class="col-md-2">

                    <!-- buscador -->
                    {{-- <div class="justify-content-sm-end"> style="min-height: 80vh;" --}}
                    <nav class="navbar " >
                      <img class="img-fluid justify-content-sm-start" alt="Responsive image" src="/images/tglobo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />
                      {{-- navbar-light bg-white --}}
                        <p style="text-align:center;">Estoy en {{Auth::user()->ubicacion}}</p>
                        <br><br>
                      <form class="form-inline" type="get" action="{{route('friendship')}}" name="buscador">
                        <input class="form-control justify-content-sm-end" id="buscador" type="search" name="buscador" placeholder="Ej. La Mona" aria-label="Search" >
                        {{-- mr-sm-4 --}}
                        <button class="btn btn-warning botonBuscar d-flex flex-row-reverse"  style=" color: white; background-color: #ff6000; margin-bottom: 10px;"   type="submit">Buscar Amigos</button>
                        {{-- btn-sm my-2 my-sm-0  --}}
                      </form>
                    </nav>

                    </div>
            				</div>
              			</div>
                		</div>
                  	</div>
                    </div>
                    <!--  FIN DE  HOME -->


                    </body>

                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
