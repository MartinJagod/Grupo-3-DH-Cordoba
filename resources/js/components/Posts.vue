<template>
      <!-- ESTO ES CANVAS CENTRAL -->

            <!-- ESTO ES CANVAS CENTRAL -->


              <div class="col-md-7 border">

                           <p>
                           Bienvenido:
                           </p>
                                <h2 class="border-bottom">

                                  User:  {{user}}
                                </h2>
                                <div class="row justify-content-center mb-1" >
                                     <form class="form-inline" method="post" action="">
                                              <input class="form-control mr-sm-4" type="text" placeholder="Que estas haciendo?" aria-label="Search" v-model="textpost">
                                               <button class="btn btn-primary btn-lg my-2 my-sm-0" type="button" @click="registrarPost()">Publicar</button>
                                          </form>
                                </div>

                                    <!-- que estas haciendo -->

                          			<div class="container border-bottom fondoGris">

                                    	<div class="row  border-bottom">
                                    		<div class="col-md-12">
                                    			<div class="row">
                                    				<div class="col-md-3">
                                    		        	 <i class="fas fa-user fa-6x"></i>
                                    				</div>
                                    				<div class="col-md-9">

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



                          	      <div class="container fondoDiv" id="centrali" >

      									<ul v-for="post in arrayPost" :key="post.id">
      											<li v-text="post.text_post"></li>
      											</li>
      									</ul>

                          		  </div>

                          </div>
<<<<<<< HEAD
                               
                              <!-- que estas haciendo -->

                    			<div class="container border-bottom fondoGris">

                              	<div class="row  border-bottom">
                              		<div class="col-md-12">
                              			<div class="row">
                              				<div class="col-md-3">
                              		        	 <i class="fas fa-user fa-6x"></i>
                              				</div>
                              				<div class="col-md-9">

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
                            


                    	      <div class="container fondoDiv" id="centrali" >
							    
									<ul v-for="post in arrayPost" :key="post.id" class="list-group">
											<li class="list-group-item">
                                            
                                                 <div class="card w-75">
                                                    <div class="card-body">
                                                        <h5 class="card-title" v-text="post.usuario"> </h5>
                                                        <p class="card-text" v-text="post.text_post"></p>
                                                        <a href="#" class="btn btn-primary">Me gusta</a>
                                                    </div>
                                                </div>
                                            
                                            </li>
											
									</ul>
                    			 
                    		  </div>

                    </div>
  </div>
=======
        </div>
>>>>>>> ef5898c736477455aaa9dca8316880c7f5df0782
                    <!-- se cierra canvas central -->
</template>

<script>
let user=document.head.querySelector('meta[name="user"]');
let nomusu=JSON.parse(user.content)

export default {
    data(){
        return {
            textpost : '',
            arrayPost : [],
            nomuser : ''
        }
    },
    computed : {
        user(){
            let nombre=JSON.parse(user.content);
            return nombre.name.toUpperCase();
        }


        

        
    },
    methods : {
        mostrarPosts(){
                let me=this;
                axios.get('/posts')
                .then(function (response) {
                    // handle success
                    
                   var respuesta=response.data;
                    me.arrayPost=response.data;

                    console.log(respuesta.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },

        registrarPost(){
                let me=this;
               axios.post('/regPost', {
<<<<<<< HEAD
                    'posteo' : this.textpost,
                    'id_user'   : nomusu['id']
                    
=======
                    'posteo' : this.textpost

>>>>>>> ef5898c736477455aaa9dca8316880c7f5df0782
                })
                .then(function (response) {
                    // console.log(response.data);
                    me.mostrarPosts();
                })
                .catch(function (error) {
                    console.log('error al hacer el post');
                });


           },

        mostrarNombreUser: function(idUser){
            let me=this;
            
            var url='/nombreUser?idus=' + idUser;
                axios.get(url)
                .then(function (response) {
                    // handle success
                    // console.log(response.data.name);
                    // me.nomuser=response.data.name;
                
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log('no funciona nada');
                });

             

        }

     
    },

    mounted(){
        this.mostrarPosts();
    }


}
</script>
