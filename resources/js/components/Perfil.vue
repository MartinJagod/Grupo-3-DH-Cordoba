<template>
  
<div class="container">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4" v-if="mifoto != ''">
                            <img :src="mifoto" class="card-img" alt="...">
                            
                        </div>
                        <div class="col-md-4" v-else>
                            <img src="images/avatar_vacio.png" class="card-img" alt="...">
                            
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="lnombre">Nombre</label>
                                                <input type="text" v-model="usuarios.vnombre" value="" class="form-control" id="lnombre">
                                            </div>
                                            <div class="form-group">
                                                <label for="lsurname">Apellido</label>
                                                <input type="text" v-model="usuarios.vsurname" value="" class="form-control" id="lsurname">
                                            </div>
                                            <div class="form-group">
                                                <label for="lphone">Telefono</label>
                                                <input type="text" v-model="usuarios.vphone" value="" class="form-control" id="lphone">
                                            </div>
                                            <div class="form-group">
                                                <label for="lfoto">Seleccionar Foto de Perfil</label>
                                                <input type="file" @change="obtenerImage"  ref="file" class="form-control-file" id="lfoto">
                                            </div>                 
                                            <div class="form-group">
                                              <button type ="button" class="form-control" name="foto" @click="actualizarUsuario()">Actualizar</button>
                                            </div>
                                            

                                        </form>
                            </div>
                        </div>
                    </div>
            </div>
 </div>  
</template>



<script>
 let user=document.head.querySelector('meta[name="user"]');
    let nomusu=JSON.parse(user.content);
export default {

   


    data(){
        return {
            imagenMiniatura : '',
            usuarios : {
                vnombre : '',
                vsurname : '',
                vphone : '',
                vfoto :''
            },
            mifoto:''
            
        }
    },

 
    methods : {

     


         actualizarUsuario(){
               
                var datos = new FormData();
                datos.append('id',nomusu['id']);
                
                datos.append('name',this.usuarios.vnombre);
                datos.append('surname', this.usuarios.vsurname);
                datos.append('phone',this.usuarios.vphone);
                datos.append('photo',this.usuarios.vfoto);
                datos.append('_method','put');
                // console.log(datos);
                axios.post('/updateUser',datos )
                .then(function (response) {
                    //  console.log(response.data);
                  
                    // this.textpost='';
                    //   me.mostrarPosts();
                })
                .catch(function (error) {
                    console.log('error al quere cargar');
                });

               
         },
         
          obtenerImage(e){

            //    this.usuarios.vfoto = this.$refs.file.files[0];
            //    console.log(this.usuarios.vfoto);

                let archivo = e.target.files[0];
                 this.usuarios.vfoto=archivo;
              
            
            this.cargarImagen(archivo);
               
          },

          cargarImagen(archivo){

            let image = new FileReader();
           
            image.onload = (e) => {
                this.imagenMiniatura = e.target.result;
               
                this.mifoto = this.imagenMiniatura;
                // console.log(this.usuarios.vfoto);
            }


            image.readAsDataURL(archivo);
        },


        recuperarImagen(){
            let me=this;
              var url='/veravatar?id='+nomusu['id'];
              axios.get(url)
                .then(function (response) {
                  console.log(response.data)
                  me.mifoto=response.data;
                  
                })
                .catch(function (error) {
                    console.log('error al quere cargar');
                });

        },


         mostrarUsuario(){
               this.usuarios.vnombre=nomusu['name'];
               
               this.usuarios.vsurname=nomusu['surname'];
               this.usuarios.vphone=nomusu['phone'];
               this.usuarios.vfoto=nomusu['photo'];
               console.log(this.usuarios.vfoto);
                if (nomusu['photo']!=''){
                    this.recuperarImagen();
                 
                }
               
                   
                //    this.mifoto = nomusu['photo'];
      }




    },


    mounted(){
        this.mostrarUsuario();
    }
}
</script>