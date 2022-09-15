export default {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Total Motor SC',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' },
      { hid: 'keywords', name: 'keywords', content: 'reparación de motores, motores automotrices, venta de motores, rectificado de motores, motor desvielado, motor Ford, motor Chevrolet, motor Nissan' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: './images/iconos/icono_motor.png' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '@/assets/css/main.css',
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    
    {src: '@/plugins/carousel',mode: 'client'}
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    'vue-sweetalert2/nuxt',
    'vue-scrollto/nuxt',
    '@nuxtjs/axios'
  ],
  sweetalert: {
    confirmButtonColor: '#DC2626',
    cancelButtonColor: '#ff7674'
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  },
  loading: {
    color: 'blue',
    height: '5px'
  }
}
