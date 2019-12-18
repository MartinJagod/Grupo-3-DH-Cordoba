<template>
      <!-- ESTO ES CANVAS CENTRAL -->

            <!-- ESTO ES CANVAS CENTRAL -->


           
                <div>
                    
               
                           
                                <div class="row border-bottom mb-3">
                                
                                      <div class="col-9 mb-3"> 
                                            <input class="form-control" type="text" placeholder="Que estas haciendo?" aria-label="Search" v-model="textpost" @keyup.enter="registrarPost()">
                                          
                                      </div>
                                      <div class="col-3 mb-3">
                                         <button class="btn btn-primary form-control" type="button" @click="registrarPost()">Publicar</button>
                                          
                                      </div>
                                     
                                   
                                    
                                             
                                         
                                    
                                </div>
                                   
                             
                                    
                             
                               

                               
                               
                              <!-- que estas haciendo -->

                    			<div class="container border-bottom fondoGris">

                             



                    	      <div class="container fondoDiv" id="centrali" >
                               
                                <ul class="list-group" v-for="post in arrayPost" :key="post.id">
                                      
                                   <li class="list-group mb-3">
                                            <div class="card border-secondary ">
                                                    <div class="card-header  text-white bg-secondary"  v-text="post.usuario">
                                                    
                                                    </div>
                                                    <div class="card-body">
                                                        <blockquote class="blockquote mb-0">
                                                        <p v-text="post.text_post"></p>
                                                        <footer class="blockquote-footer"> <a href="#" class="btn btn-primary btn-sm">Me gusta</a></footer>
                                                        </blockquote>
                                                    </div>
                                            </div>

                                    </li>
                                </ul>
                    			 
                    		  </div>

                    </div>
        </div>
                    <!-- se cierra canvas central -->
</template>

<script>
let user=document.head.querySelector('meta[name="user"]');
let nomusu=JSON.parse(user.content)

export default {
    props: ["usuario"],
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
                    'posteo' : this.textpost,
                    'id_user'   : nomusu['id']
                    
                })
                .then(function (response) {
                    // console.log(response.data);
                  
                    // this.textpost='';
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
        console.log(this.usuario)
    }


}
</script>
