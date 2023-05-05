<template>
    <div>
        <carousel perPage="1" paginationActiveColor="#DAA520" paginationColor="#C4C4C4">
            <slide>
                <div class="cuadro"><img src="@/static/images/marcas/Nissan.png" alt=""></div>
            </slide>
            <slide>
                <div class="cuadro"><img src="@/static/images/marcas/Toyota.png" alt=""></div>
            </slide>
            <slide>
                <div class="cuadro"><img src="@/static/images/marcas/VB.png" alt=""></div>
            </slide>
            <slide>
                <button @click="openModal(7)"><div class="cuadro"><img src="@/static/images/marcas/Audi.png" alt=""></div></button>
            </slide>
            <slide>
                <div class="cuadro"><img src="@/static/images/marcas/BMW.png" alt=""></div>
            </slide>
            <slide>
                <button  @click="openModal(1)"><div class="cuadro"><img src="@/static/images/marcas/Chevrolet.png" alt=""></div></button>
            </slide>
            <slide>
                <button @click="openModal(4)"><div class="cuadro"><img src="@/static/images/marcas/Dodge.png" alt=""></div></button>
            </slide>
            <slide>
                <button @click="openModal(2)"><div class="cuadro"><img src="@/static/images/marcas/Ford.png" alt=""></div></button>
            </slide>
            <slide>
                <button @click="openModal(3)"><div class="cuadro"><img src="@/static/images/marcas/Jeep.png" alt=""></div></button>
            </slide>
            <slide>
                <button @click="openModal(6)"><div class="cuadro"><img src="@/static/images/marcas/Mercedes.png" alt=""></div></button>
            </slide>
            <slide>
                <div class="cuadro"><img src="@/static/images/marcas/gmc.png" alt=""></div>
            </slide>
            <slide>
                <button @click="openModal(5)"><div class="cuadro"><img src="@/static/images/marcas/landrover.png" alt=""></div></button>
            </slide>
        </carousel>
    </div>
</template>
<style>

</style>
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