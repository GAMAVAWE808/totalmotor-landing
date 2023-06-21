export const state = () => ({
    marca_id: 1,
    mostrar_modal_marca:false
  })


  export const mutations = {
    SET_MARCA_ID (state, value) {
      state.marca_id = value
    },
    SET_MOSTRAR_MODAL_MARCA (state, value) {
      state.mostrar_modal_marca = value
    }
  }
  export const actions = {
    SET_MOSTRAR_MODAL_MARCA({ commit }, value) {
      commit('SET_MOSTRAR_MODAL_MARCA', value)
    },
    SET_MARCA_ID({ commit }, value) {
      commit('SET_MARCA_ID', value)
    },
  }