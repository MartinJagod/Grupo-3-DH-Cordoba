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
        </div>
                    <!-- se cierra canvas central -->
</template>

<script>
let user=document.head.querySelector('meta[name="user"]');

export default {
    data(){
        return {
            textpost : '',
            arrayPost : []
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
                    me.arrayPost=response.data;
                    // console.log(me.arrayPost);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },

        registrarPost(){
                let me=this;
               axios.post('/regPost', {
                    'posteo' : this.textpost

                })
                .then(function (response) {
                    console.log(response.data);
                    me.mostrarPosts();
                })
                .catch(function (error) {
                    console.log('no se que verga hace');
                });


           }
    },

    mounted(){
        this.mostrarPosts();
    }


}
</script>
