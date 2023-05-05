<template>
    
    <div class="h-screen">
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
  <ModalMarcas/>
</div>
</template>
<script>
export default {
    head() {
        return {
            title: "Total Motor SC",
            script: [
                { hid: "recaptcha", src: "https://www.google.com/recaptcha/api.js" }
            ]
        };
    },
}
</script>
