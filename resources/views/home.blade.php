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

                    <div class="container espaciado fixed">
                    	<div class="row">
                        <div class="col-md-12">


        <!-- ESTO ES CANVAS IZQUIERDO -->

                <div class="row">
                    				<div class="col-md-3 " style="min-height: 80vh;">
                              <img class="img-fluid" alt="Responsive image" src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />

{{-- LISTADO CON OPCIONES MENU IZQUIERDO --}}
              							<ul class="list-unstyled">


<<<<<<< HEAD
                                						<li class="list-item" @click="menu=1">
                          												<a class="btn btn-link" href="#">
=======
                                						<li class="list-item">
                          												<a class="btn btn-link" href="#" >
>>>>>>> ed4477cead322b63c4f5416bc0c8328e79c42a07
                          												<h5><i class="fas fa-home"></i> Fotos</h5>
                          												</a>
                                						</li>

<<<<<<< HEAD
                                            <li class="list-item" @click="menu=2">
                                                  <a class="btn btn-link" href="#">
=======
                                            <li class="list-item">

                                                  <a class="btn btn-link" href='/notificacion'>
>>>>>>> ed4477cead322b63c4f5416bc0c8328e79c42a07
                                                  <h5><i class="fas fa-bell"></i>  Notificaciones</h5>
                                                  </a>
            								               </li>

                                            <li class="list-item" @click="menu=0">
                                                <a class="btn btn-link" id="mensajes" href="#">
                                                <h5><i class="fas fa-envelope"></i>  Posts</h5>
                                                </a>
            								               </li>

                                            {{-- <li class="list-item">
                                                <a class="btn btn-link" href="#">
                                                <h5><i class="fas fa-list-alt"></i> Listas</h5>
                                                </a>
                                            </li> --}}

                                            <li class="list-item" @click="menu=3">
                                                <a class="btn btn-link" id="perfil" href="#">
                                                <h5><i class="fas fa-user-circle"></i>Perfil</h5>
                                                </a>
            								                </li>

                                            {{-- <li class="list-item">
                                              <a class="btn btn-link" href="#">
                                              <h5><i class="fas fa-ellipsis-h"></i> Opciones</h5>
                                              </a>
                                            </li>
                                          </ul> --}}
{{--
            								<button type="button" class="btn btn-primary btn-sm">Chamullar</button> --}}


                          </div>


                   <!-- aqui va el canvas central -->
              <div class="col-md-7 border">

                      <p>Bienvenido:</p>
                      <h2 class="border-bottom">

                        User:  {{ Auth::user()->name }}
                      </h2>
                   <template v-if="menu==0">
                      <posts :usuario="{{Auth::user()}}"></posts>
                   </template>
                   <template v-if="menu==1">
                   <div>
                   <h1>menu1</h1>
                   </div>
                     
                   </template>
                   <template v-if="menu==2">
                   <div>
                      <h1>menu 2</h1>
                   </div>
                    
                   </template>
                   <template v-if="menu==3">
                     <div>
                       <perfil></perfil>
                     </div>
                   </template>
              </div>
					     



                    <!-- ESTO ES CANVAS DERECHO -->
                    <div class="col-md-2 ">

                    <!-- buscador -->
                    {{-- <div class="justify-content-sm-end"> style="min-height: 80vh;" --}}
                    <nav class="navbar " >
                      <img class="img-fluid justify-content-sm-start" alt="Responsive image" src="/images/tglobo.png" style="display:block; margin-left: auto; margin-right: auto; width:90%; margin-bottom: 50px; margin-top: 20px;" />
                      {{-- navbar-light bg-white --}}
                      <form class="form-inline" type="get" action="{{route('friendship')}}" name="buscador">
                        <input class="form-control justify-content-sm-end" id="buscador" type="search" name="buscador" placeholder="Ej. La Mona" aria-label="Search" >
                        {{-- mr-sm-4 --}}
                        <button class="btn btn-warning botonBuscar d-flex flex-row-reverse"  style=" color: white; background-color: #ff6000; margin-bottom: 10px;"   type="submit">Buscar Amigos</button>
                        {{-- btn-sm my-2 my-sm-0  --}}
                      </form>
                    </nav>

                    </div>


                    {{-- <div class="tendencias  fondoGris">
                                <h4>
                                  Tendencias
                                </h4>
                    					<ul class="list-unstyled">
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Fernet
                                </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Asado
                                  </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Baile
                                  </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Juntada
                                  </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Europa
                                  </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#EstadosUnidos
                                  </a>
                    						</li>
                    						<li class="list-item border-bottom">
                                  <a class="btn btn-link" href="#">
                    							#Amigos
                                  </a>
                    						</li>

                    					</ul> --}}
                    					{{-- <h3>
                    						Otros en tu zona:
                    					</h3>
                    					<ul class="list-unstyled">
                                <a class="btn btn-link" href="#">
                    						<li class="list-item">
                    							LuquitasJ
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							Leolondero
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							Elnegromaxi
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                                  Elian
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							MartinFernan
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							MartinJagod
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							Charlychanta
                                  </a>
                    						</li>
                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                    							BarthSimp
                                  </a>
                    						</li>
                    					</ul> --}}
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
