import axios from "../../plugins/axios";
const state = {
    users: {}
};
const getters = {
    all(state, getters) {
        return state.users;
    }
};
const actions = {
    getUsers(context) {
        return new Promise((resolve, reject) => {
            axios.get('/users').then((result) => {
                context.commit('setUsers', result.data.users);
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    store(context, user) {
        return new Promise((resolve, reject) => {
            axios.post('/user/store', user).then((result) => {
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    }
};
const mutations = {
    setUsers(state, users) {
        state.users = users;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}