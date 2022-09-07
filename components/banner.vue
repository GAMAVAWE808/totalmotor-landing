<template>
    <div class="w-screen bg-negroTM bg-blend-overlay">
        <div class="w-full lg:w-8/12 h-full flex-col flex justify-center  px-6 items-center">
            <h1 class="expertos">
            EXPERTOS
        </h1>
        <h2 class="motores">EN MOTORES</h2>
        <div class="botones mt-3 lg:mt-20 w-full  space-y-10 lg:space-y-0 lg:h-10 flex  flex-col  lg:flex-row">
            <a v-scroll-to="{
                el: '#formulario',
                duration: 1000}" href="#" class="boton1 flex h-10  items-center justify-center w-1/2  mx-20">
                Contactanos
            </a>
            <a v-scroll-to="{
                el: '#soluciones',
                duration: 1000}" href="#" class="boton2 h-10  w-1/2 flex items-center justify-center mx-20">
                Soluciones
            </a>
        </div>
        </div>

    </div>
</template>
<script>
export default {
    methods: {
        
    },
}
</script>
<style>

</style>