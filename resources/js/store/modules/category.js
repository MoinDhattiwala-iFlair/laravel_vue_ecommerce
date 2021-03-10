import axios from "../../plugins/axios";
const state = {
    categories: {}
};
const getters = {
    all(state, getters) {
        return state.categories;
    }
};
const actions = {
    get(context) {
        return new Promise((resolve, reject) => {
            axios.get('/category').then((result) => {
                context.commit('set', result.data.categories)
                resolve();
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    find(context, slug) {
        return new Promise((resolve, reject) => {
            axios.get('/category/' + slug).then((result) => {
                resolve(result.data.category);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    store(context, category) {
        return new Promise((resolve, reject) => {
            axios.post('/category', category).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    update(context, category) {
        return new Promise((resolve, reject) => {
            axios.post('/category/' + category.slug, category).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    delete(context, category) {
        return new Promise((resolve, reject) => {
            axios.delete('/category/' + category.slug).then((result) => {
                context.commit('remove', category.index);
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
};
const mutations = {
    set(state, categories) {
        state.categories = categories;
    },
    remove(state, index) {
        state.categories.splice(index, 1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}