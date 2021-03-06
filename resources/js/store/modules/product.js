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
    find(context, slug) {
        return new Promise((resolve, reject) => {
            axios.get('/product/' + slug).then((result) => {                
                resolve(result.data.product);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    store(context, product) {
        return new Promise((resolve, reject) => {
            axios.post('/product', product.formData).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    update(context, product) {
        return new Promise((resolve, reject) => {
            axios.post('/product/' + product.slug, product.formData).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    delete(context, product) {
        return new Promise((resolve, reject) => {
            axios.delete('/product/' + product.slug).then((result) => {
                context.commit('remove', product.index);
                resolve(result.data);
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
    remove(state, index) {
        state.products.splice(index, 1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}