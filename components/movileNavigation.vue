
<template>
    <div>
<div  :class="['lg:hidden','dropdown', 'flex', 'relative', 'pl-10','w-full']">
   
	<button style="height:40px;"  class="bg-transparent border-2 border-tm  hover:bg-gray-700 hover:text-white color-totalmotor font-semibold py-2 px-4 rounded inline-flex items-center">
		<!-- <span>Dropdown 🠋</span> -->
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
	</button>
	<ul class="block dropdown-content absolute w-38 hidden text-gray-700  pt-1" style="left:0">
		<li><a href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Inicio</a></li>
        <li><a v-scroll-to="{
                el: '#soluciones',
                duration: 1000}" href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Soluciones</a></li>
		<li><a v-scroll-to="{
                el: '#promociones',
                duration: 1000}" href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Promociones</a></li>
      	<li><a v-scroll-to="{
                el: '#marcas',
                duration: 1000}" href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Marcas</a></li>
		<li><a v-scroll-to="{
                el: '#formulario',
                duration: 1000}" href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Formulario</a></li>
	</ul>
    <a class="absolute" style="right:10%" href="#"><img width="150px" src="@/static/images/logo.png" alt="" srcset=""></a>
</div>
     
    </div>
</template>
<script>
export default {
    data() {
        return {
            active:false
        }
    },
    methods: {
        activar:function(){
            this.active = !this.active;
            debugger
        }
    },
}
</script>
<style>
.dropdown:hover > .dropdown-content {
	display: block;
}
.derecha-submenu{
    right: 14rem;
}
</style>