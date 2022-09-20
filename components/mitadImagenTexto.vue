<template>
    <div class="w-full py-10">
        <h1 class="text-2xl lg:text-3xl px-10 lg:px-0 text-center">LOS PROBLEMAS DE MOTOR, <strong class="color-totalmotor">NOSOTROS LOS RESOLVEMOS</strong></h1>
        <div class="text-3xl lg:text-6xl text-center space-x-10 lg:space-x-60">
            <span class="punto-negrotm">.</span>
        <span class="punto-negrotm">.</span>
        <span class="punto-negrotm">.</span>
        </div>
        <div class="w-full flex flex-col lg:flex-row space-y-10 px-20 h-full">
            <div class="w-full lg:w-1/2 mt-28  lg:mx-10  texto-problema-motor">
            <div class="space-y-6 text-center lg:text-left">
                <p>Total Service Motor Club es una empresa mexicana fundada en la necesidad de talleres especializados en la remanufactura y restauración de motores automotrices de todas las marcas, gasolina y diésel.</p>
            <p>
                Tenemos alcance en México y Estados Unidos en la compra y venta de motores a 3/4 y partes de motor; tanto a particulares como a empresas.
            </p>
            <p>
            Nuestra satisfacción es generar un servicio de excelencia y 
            calidad en cada proyecto realizado.
            </p>
            </div>
            <img class="logo-blanco-text text-center flex justify-center" src="@/static/images/logo_blanco.png" alt="">
            </div>
            <CaruselMotor class="lg:hidden"/>
            <div class="w-full hidden lg:block order-first lg:order-last lg:w-1/2">
            <!-- <img style="width: 675px" src="@/static/images/motor4.png" alt="" srcset=""> -->
            <div class="flex h-full w-full flex-wrap   items-center">
                <img class="historia-img" src="@/static/images/motores/9.jpeg" alt="" srcset="">
            <img class="historia-img" src="@/static/images/motores/10.jpeg" alt="" srcset="">
            <img class="historia-img" src="@/static/images/motores/11.jpeg" alt="" srcset="">
            <img class="historia-img" src="@/static/images/motores/12.jpeg" alt="" srcset="">
            </div>
            </div>
        </div>
    </div>
</template>
<script>
import CaruselMotor from './caruselMotor.vue';
export default {
    components: { CaruselMotor }
}
</script>
<style>

</style>