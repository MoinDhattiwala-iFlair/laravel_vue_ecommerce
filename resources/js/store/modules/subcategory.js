import axios from '../../plugins/axios'
const state = {
    subcategories: {}
};
const getters = {
    all(state, getters) {
        return state.subcategories;
    },
};
const actions = {
    get(context) {
        return new Promise((resolve, reject) => {
            axios.get('/subcategory').then((result) => {
                context.commit('set', result.data.subcategories)
                resolve();
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
};
const mutations = {
    set(state, subcategories) {
        state.subcategories = subcategories;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}