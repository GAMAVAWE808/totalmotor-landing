<template>
    <div id="promociones" class="w-full pb-20 flex flex-col" >
        <!-- <div class="garantia-extendida  flex text-center items-center">
            <div class="block">
               <strong class="color-totalmotor" style="font-weigth:800;">Contrata este mes</strong> y obten una <strong class="color-totalmotor">PROMOCIÓN ESPECIAL</strong> en nuestros servicios.
                </div>
        </div> -->
        <div class="flex items-center pt-20  justify-center ">
            <div class="fondo-banderas relative">
                <img class="z-0 banderas" src="@/static/images/banderas.png" alt="">
                <h1 class="z-10  subtexto">Venta de piezas de motor <br> y motores reconstruidos <br></h1>
            </div>
        </div>
        <a v-scroll-to="{
                el: '#formulario',
                duration: 1000}" href="#" class="boton1 z-10 flex items-center justify-center boton-contacto  mx-20">
                Contactanos
            </a>
    </div>
</template>
<style>

</style>