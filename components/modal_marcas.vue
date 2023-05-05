
  <template>
    <div>
      <div class="modal" v-if="mostrar_modal_marca">
        <div class="modal-content">
          <span class="close" @click="closeModal()">&times;</span>
    <div>
        <carousel style="height: 90vh;"  perPage="1" paginationActiveColor="#DAA520" paginationColor="#C4C4C4">
            <slide class="slide-modal" v-for="imagen in marca.imagenes" key="marca.id">
            <div class="cuadro-modal "><img class="imagen-cuadro-modal"  :src="imagen" alt=""></div>
            </slide>
        </carousel>
    </div>
        </div>
      </div>
    </div>
  </template>
  
  <style>
  .modal {
    display: block;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
  }
  .imagen-cuadro-modal{
    width: 100%;
    height: 100%;
  }
  .modal-content {
    background-color: #fefefe;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    border-radius: 30px;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    margin-top: 1%;
    margin-right: auto;
    margin-left: auto;
  }
  
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  .carrusel-modal{
    width: 10rem;
    height: 20vh;
  }
  .slide-modal{
    height: 99vh;
  }
  @media screen and (max-width:700px){
    .modal-content {
    background-color: #fefefe;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    border-radius: 30px;
    padding: 20px;
    border: 1px solid #888;
    width: 90%;
    margin-top: 1%;
    margin-right: auto;
    margin-left: auto;
  }
  }
  </style>
  
  <script>
  import { mapState, mapActions } from 'vuex'
  import data from "static/json/marcas_para_carrusel.json"
  export default {
    computed: {
    ...mapState(['mostrar_modal_marca','marca_id']),
    obtener_marca(){
        

        switch(this.marca_id){
            case 1:
                this.marca = this.marcas[0]
                console.log("Si es igual a 1")
                break;
            case 2:
                this.marca = this.marcas[1]
                console.log("Si es igual a 2")
                break;
            case 3:
                this.marca = this.marcas[2]
                console.log("Si es igual a 1")
                break;
            case 4:
                this.marca = this.marcas[3]
                console.log("Si es igual a 2")
                break;
            case 5:
                this.marca = this.marcas[4]
                console.log("Si es igual a 1")
                break;
            case 6:
                this.marca = this.marcas[5]
                console.log("Si es igual a 2")
                break;
            case 7:
                this.marca = this.marcas[6]
                console.log("Si es igual a 2")
                break;
        }
        
    }
  },
    data() {
      return {
        showModal:false,
        marca:{},
    marcas:data

      }
    },
    methods:{
        ...mapActions(['SET_MOSTRAR_MODAL_MARCA']),
    closeModal() {
      this.SET_MOSTRAR_MODAL_MARCA(false)
    },

    },
    
    }
  </script>