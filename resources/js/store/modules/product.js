import axios from '../../plugins/axios'
const state = {
    products: {}
};
const getters = {
    all(state, getters) {
        return state.products;
    },
};
const actions = {
    get(context) {
        return new Promise((resolve, reject) => {
            axios.get('/product').then((result) => {
                context.commit('set', result.data.products);
                resolve();
            }).catch((err) => {
                reject(err.response);
            });           
        });
    },
};
const mutations = {
    set(state, products) {
        state.products = products;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}