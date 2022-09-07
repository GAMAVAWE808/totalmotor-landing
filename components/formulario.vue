<template>
    <div id="formulario" class="seccion-negra pt-32">
        <h1 class="text-xl lg:text-3xl text-center text-white px-10 lg:px-32">Escribenos en el siguiente formulario,<br>
        y uno de nuestros colaboradores se contactara contigo.</h1>
        <div class="formulario pt-10  lg:pt-32">
            <div data-aos="fade-right" data-aos-delay="300" class=" lg:w-3/5 lg:h-full  mx-auto " >
            <div class="flex w-full h-full text-center justify-center items-center">
                <div class="flex text-white h-full justify text-left w-5/6 flex-col py-6 space-y-6">
                <div class="flex-col">
                    <label  class="text-gray-600" for="nombre"></label><span :class="['text-red-600',{'hidden': nombre.lleno}]"> Falta este campo</span>
                <input @blur="validarCampo(nombre)" v-model="nombre.text"  class="flex px-10 w-full h-12" placeholder="Nombres:" type="text" name="nombre" id="nombre">
                
                </div>
                <div class="flex-col">
                    <label class="text-gray-600" for="apellido"></label><span :class="['text-red-600',{'hidden': apellido.lleno}]"> Falta este campo</span>
                <input @blur="validarCampo(apellido)" v-model="apellido.text" placeholder="Apellidos:" class="flex px-10 w-full h-12" type="text" name="apellido" id="apellido">
                
                </div>
                <div class="flex-col">
                    <label class="text-gray-600" for="telefono"></label><span :class="['text-red-600',{'hidden': telefono.lleno}]"> Falta este campo</span>
                <input @input="validarTelefono" @blur="validarCampo(telefono)" v-model="telefono.text" class="flex px-10 w-full h-12" placeholder="Telefono:" type="tel" maxlength="10" required="required" name="telefono" id="telefono">
                
                </div>
                <div class="flex-col">
                    <label class="text-gray-600" for="email"></label><span :class="['text-red-600',{'hidden': email.lleno}]"> Correo Invalido</span>
                    <input @blur="validarCampo(email,true)" placeholder="Email:" v-model="email.text" class="flex px-10 w-full h-12" type="text" name="email" id="email">
                
                </div>
                <div class="flex-col">
                    <label class="text-gray-600" for="marca"></label><span :class="['text-red-600',{'hidden': marca.lleno}]"> Falta este campo</span>
                <input @blur="validarCampo(marca)" v-model="marca.text" placeholder="Marca de auto/ motor:" class="flex px-10 w-full h-12" type="text" name="marca" id="marca">
                
                </div>
                <div class="flex-col">
                    <label class="text-gray-600" for="ayuda"></label><span :class="['text-red-600',{'hidden': mensaje.lleno}]"> Falta este campo</span>
                <textarea @blur="validarCampo(mensaje)" v-model="mensaje.text" placeholder="Escribe aqui el servicio, o duda que tengas..." class="w-full px-10 pt-10" name="ayuda" id="ayuda" cols="30" rows="10"></textarea>
                
                </div>
                <div  class="flex flex-col text-center justify-center self-center">
                    <button :disabled="disabled" @click="performPostRequest"  class="h-10 w-40 bg-totalmotorA hover:bg-gray-800 text-white hover:text-yellow-600 disabled:opacity-50">Enviar</button>
                    
                    <span :class="['text-red-600',{'hidden': !camposVacios}]">Faltan campos por llenar</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>
<script>
export default {

    data() {
        return {
            disabled:false,
            camposVacios:false,
            nombre:{text:'',lleno:true},
            apellido:{text:'',lleno:true},
            marca:{text:'',lleno:true},
            telefono:{text:'',lleno:true},
            email:{text:'',lleno:true},
            mensaje:{text:'',lleno:true}
        }
    },
    computed:{

    },
    methods: {
        validarTelefono(){
            this.telefono.text = this.telefono.text.replace(/[^0-9]/g, '');
        },
        validarCampos(nombre,email,telefono,apellido,mensaje,marca){
        if (!nombre || !apellido || !telefono || !email || !mensaje || !marca) {
        return false;
        }
        else {
        return true;
        }
        },
        validarCampo(e,correo){
            if(!e.text){
                e.lleno = false;

            }
            else{
                e.lleno = true;
            }
            if(correo === true){
           
                if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(e.text)) {
                    
            this.disabled = false;
            e.lleno = true;
            }
            else {
                
            e.lleno = false;
            this.disabled = true;
            }
            }
        },
        
        performPostRequest(){
            if(this.validarCampos(this.nombre.text,this.email.text, this.telefono.text, this.apellido.text, this.mensaje.text ,this.marca.text)=== true){
                this.camposVacios = false;
                
                this.$axios.post('https://correo.totalmotorsc.com',{
                    nombre: this.nombre.text,
                    telefono: this.telefono.text,
                    correo: this.email.text,
                    apellido: this.apellido.text,
                    marca: this.marca.text,
                    mensaje: this.mensaje.text
                    
                })
                .then(response=>{
                    this.nombre.text ="";
                    this.telefono.text ="";
                    this.email.text = "";
                    this.marca.text = "";
                    this.apellido.text ="";
                    this.mensaje.text = "";
                    this.$swal(
                {
                    icon:'success',
                    title:'Envio Exitoso'
                }
            )

                })
                .catch(function(error){
                    console.log(error)

                });
            }
            else{
                this.camposVacios = true;
            }
        }
    },
    
}
</script>
<style>
input, textarea{
    background: radial-gradient(90.16% 143.01% at 15.32% 21.04%, rgba(218, 165, 32, 0.2) 0%, rgba(110, 191, 244, 0.0447917) 77.08%, rgba(70, 144, 213, 0) 100%);
background-blend-mode: overlay, normal;
border: 1px solid #E2E2E2;
}
</style>