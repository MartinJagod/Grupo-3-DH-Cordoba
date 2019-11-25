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
                    				<div class="col-md-3">
                              <img class=" img-fluid" alt="Resposive image" src="/images/logo1.jpg" />

                    					<ul class="list-unstyled">


                    						<li class="list-item">
                                  <a class="btn btn-link" href="#">
                                  <h5><i class="fas fa-home"></i> Inicio</h5>
                                  </a>
                    						</li>

                                <li class="list-item">
                                  <a class="btn btn-link" href="#">
                                  <h5><i class="fas fa-bell"></i>  Notificaciones</h5>
                                  </a>
                    						</li>


                                <li class="list-item">
                                  <a class="btn btn-link" id="mensajes" href="#">
                                  <h5><i class="fas fa-envelope"></i>  Mensajes</h5>
                                  </a>
                    						</li>

                                <li class="list-item">
                                  <a class="btn btn-link" href="#">
                                  <h5><i class="fas fa-list-alt"></i> Listas</h5>
                                  </a>
                                </li>

                                <li class="list-item">
                                  <a class="btn btn-link" id="perfil" href="#">
                                  <h5><i class="fas fa-user-circle"></i>Perfil</h5>
                                  </a>
                    						</li>

                                <li class="list-item">
                                  <a class="btn btn-link" href="#">
                                  <h5><i class="fas fa-ellipsis-h"></i> Opciones</h5>
                                  </a>
                                </li>
                              </ul>



                    					<button type="button" class="btn btn-primary btn-sm">Chamullar</button>

                    					</button>

                    				</div>

                    <!-- ESTO ES CANVAS CENTRAL -->


                    				<div class="col-md-6 border">

                    					<h2 class="border-bottom">
                          {{ Auth::user()->name }} <span class="caret"></span>

                    					</h2>


                              <!-- que estas haciendo -->

                    			<div class="container border-bottom fondoGris">

                              	<div class="row">
                              		<div class="col-md-12">
                              			<div class="row">
                              				<div class="col-md-3">
                              			 <i class="fas fa-user fa-6x"></i>
                              				</div>
                              				<div class="col-md-9">

                                        <form class="form-inline">
                                          <input class="form-control mr-sm-2" type="search" placeholder="Que estas haciendo?" aria-label="Search">
                                          <button class="btn btn-primary btn-lg my-2 my-sm-0" type="submit">Publicar</button>
                                        </form>



                              					<div class="row">
                              						<div class="col-md-6">
                              							<div class="row">
                              								<div class="col-md-4">

                              									<button type="button" class="btn btn-primary btn-sm">
                              										<i class="far fa-image fa-2x"></i>
                              									</button>
                              								</div>
                              								<div class="col-md-4 ">

                                                					<button type="button" class="btn btn-primary btn-sm">
                              										<i class="far fa-smile fa-2x"></i>
                              									</button>
                              								</div>
                              								<div class="col-md-4">

                    												<button type="button" class="btn btn-primary btn-sm">
                              										<i class="fas fa-question fa-2x"></i>
                              									</button>
                              								</div>
                              							</div>
                              						</div>

                              					</div>

                              				</div>

                              			</div>
                              		</div>
                              	</div>
                              </div>


                    	      <div class="container fondoDiv" id="centrali">

                    			 <!-- <h3>Aqui va Todo</h3>		   -->
                    		  </div>



                    <!-- se cierra canvas central -->
                    		</div>



                    <!-- ESTO ES CANVAS DERECHO -->
                    <div class="col-md-3">

                    <!-- buscador -->

                    <nav class="navbar navbar-light bg-white">
                      <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit">Buscar</button>
                      </form>
                    </nav>


                    <div class="tendencias  fondoGris">
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

                    					</ul>
                    					<h3>
                    						A quien seguir
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
                    					</ul>
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
@endsection
