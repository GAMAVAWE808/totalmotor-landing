<template>
    <div class="absolute w-full">
        <nav class="sticky  top-0 z-10 bg-transparent">
            <MovileNavigation/>
            <div class="mx-20 hidden  lg:block">
            <div class="flex items-center justify-between h-16">
            <span class="logo"><a href="#"><img src="@/static/images/logo.png" alt="" srcset=""></a></span>
            <div class=" flex space-x-4 text-white">
                <a href="#">Inicio
                </a>
                <a v-scroll-to="{
                el: '#soluciones',
                duration: 1000}" href="#">Soluciones</a>
                <a v-scroll-to="{
                el: '#promociones',
                duration: 1000}" href="#">Promociones</a>
                <a v-scroll-to="{
                el: '#marcas',
                duration: 1000}" href="#">Marcas</a>
                <a v-scroll-to="{
                el: '#formulario',
                duration: 1000}" href="#">Contacto</a>
            </div>
            </div>
            </div>
        </nav>
    </div>
</template>
<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>
<style>

</style>