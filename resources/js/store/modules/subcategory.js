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
    find(context, slug) {
        return new Promise((resolve, reject) => {
            axios.get('/subcategory/' + slug).then((result) => {                
                resolve(result.data.subcategory);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    store(context, subcategory) {
        return new Promise((resolve, reject) => {
            axios.post('/subcategory', subcategory).then((result) => {                
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    update(context, subcategory) {
        return new Promise((resolve, reject) => {
            axios.post('/subcategory/' + subcategory.slug, subcategory).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    delete(context, subcategory) {
        return new Promise((resolve, reject) => {
            axios.delete('/subcategory/' + subcategory.slug).then((result) => {
                context.commit('remove', subcategory.index);
                resolve(result.data);
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
    remove(state, index) {
        state.subcategories.splice(index, 1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}