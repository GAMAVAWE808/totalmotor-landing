
  <template>
    <div>
      <div class="modal" v-if="mostrar_modal_marca">
        <div class="modal-content">
          <span class="close" @click="closeModal()">&times;</span>
    <div>
        <carousel style="height: 90vh;"  perPage="1" paginationActiveColor="#DAA520" paginationColor="#C4C4C4">
            <slide class="slide-modal" v-for="imagen in marca.imagenes" key="imagen">
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
  export default {
    computed: {
    ...mapState(['mostrar_modal_marca','marca_id']),

  },
    data() {
      return {
        showModal:false,
        marca:{},
    marcas:[
    {
        "id":1,
    "nombre":"chevrolet",
    "imagenes":[
        "/images/motores/chevrolet-1.jpeg",
        "/images/motores/chevrolet-2.jpeg",
        "/images/motores/chevrolet-3.jpeg",
        "/images/motores/chevrolet-4.jpeg",
        "/images/motores/chevrolet-5.jpeg"
    ]
    },
    {
        "id":2,
    "nombre":"ford",
    "imagenes":[
        "/images/motores/ford-1.jpeg",
        "/images/motores/ford-3.jpeg",
        "/images/motores/ford-4.jpeg"
    ]
    },
    {
        "id":3,
    "nombre":"jeep",
    "imagenes":[
        "/images/motores/jeep-1.jpeg"
        
    ]
    },
    {
        "id":4,
    "nombre":"dodge",
    "imagenes":[
        "/images/motores/dodge-1.jpeg",
        "/images/motores/dodge-2.jpeg"
    ]
    },
    {
        "id":5,
    "nombre":"land rover",
    "imagenes":[
        "/images/motores/land rover-1.jpeg"
    ]
    },
    {
        "id":6,
    "nombre":"mercedes",
    "imagenes":[
        "/images/motores/mercedes-1.jpeg"
    ]
    },
    {
        "id":7,
    "nombre":"audi",
    "imagenes":[
        "/images/motores/audi-1.jpeg"
    ]
    }
    
]

      }
    },
    methods:{
        ...mapActions(['SET_MOSTRAR_MODAL_MARCA']),
    closeModal() {
      this.SET_MOSTRAR_MODAL_MARCA(false)
    },
    setMarca(valor){
      let indice = this.marcas.findIndex(x=> x.id == valor)
      if (indice != -1){
        this.marca = this.marcas[indice]
      }
      
    }

    },

  watch: {
    marca_id:{
      handler(nuevoValor){
        console.log('El valor de miVariable ha cambiado:', nuevoValor);
        this.setMarca(nuevoValor)
      },
      inmediate:true
    }
  },
    }
  </script>