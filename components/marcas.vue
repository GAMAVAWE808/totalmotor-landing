<template>
    <div id="marcas" class="w-full pb-20  lg:py-32">
        <h1 id="marcas-h1" class="text-2xl lg:text-4xl px-10 lg:px-0 py-10 lg:py-20 text-center">ESTAS Y MÁS MARCAS ...</h1>
        <CaruselMarcas class="lg:hidden"/>
        <div class="hidden lg:block align-cajas w-full">
            <div class="justify-center flex flex-wrap">
                <div class="cuadro"><img src="@/static/images/marcas/Nissan.png" alt=""></div>
                <div class="cuadro"><img src="@/static/images/marcas/Toyota.png" alt=""></div>
                <div class="cuadro"><img src="@/static/images/marcas/VB.png" alt=""></div>
                <button @click="openModal(7)"><div class="cuadro"><img src="@/static/images/marcas/Audi.png" alt=""></div></button>
                <div class="cuadro"><img src="@/static/images/marcas/BMW.png" alt=""></div>
                <button  @click="openModal(1)"><div class="cuadro"><img src="@/static/images/marcas/Chevrolet.png" alt=""></div></button>
                <button @click="openModal(4)"><div class="cuadro"><img src="@/static/images/marcas/Dodge.png" alt=""></div></button>
                <button @click="openModal(2)"><div class="cuadro"><img src="@/static/images/marcas/Ford.png" alt=""></div></button>
                <button @click="openModal(3)"><div class="cuadro"><img src="@/static/images/marcas/Jeep.png" alt=""></div></button>
                <button @click="openModal(6)"><div class="cuadro"><img src="@/static/images/marcas/Mercedes.png" alt=""></div></button>
                <div class="cuadro"><img src="@/static/images/marcas/gmc.png" alt=""></div>
                <button @click="openModal(5)"><div class="cuadro"><img src="@/static/images/marcas/landrover.png" alt=""></div></button>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions } from 'vuex'
export default {
    

    data() {
        return {
            
        }
    },
    methods: {
        
        ...mapActions(['SET_MOSTRAR_MODAL_MARCA','SET_MARCA_ID']),
        openModal(val) {
        this.SET_MOSTRAR_MODAL_MARCA(true);
        this.SET_MARCA_ID(val);

        }
    }


}
</script>
<style>

</style>
