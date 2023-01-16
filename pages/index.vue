<template>
    
    <div id="cuerpo" class="h-screen">
  <Navbar/>
  <Banner/>
  <Lista/>
  <MitadImagenTexto/>
  <Iconos/>
  <GarantiaExtendida/>
  <Marcas/>
  <SliderBlack/>
    <Motores/>
  <Iconosoro/>
  <Maps/>
  <Formulario/>
  <Footer/>
  <Botonwsp/>
</div>
</template>
<script>
export default {
    data() {
        return {
            idk:null
        }
    },
    head() {
        return {
            title: "Total Motor SC",
            script: [
                { hid: "recaptcha", src: "https://www.google.com/recaptcha/api.js" }
          

            ]
        };
    },
    created() {
        // const html = document.getElementById('cuerpo')
        // var ldk = document.createElement('script'); 
        // ldk.type = 'text/javascript'; 
        // ldk.async = true; 
        // ldk.src = 'https://s.cliengo.com/weboptimizer/63533f922b5e57002a46d7bb/63534b95ef020b002aeb8aca.js?platform=onboarding_modular';
        // var s = document.getElementsByTagName('script')[0];
        // html.appendChild(ldk)
        // s.parentNode.insertBefore(ldk, s);
    },
        

}
</script>
