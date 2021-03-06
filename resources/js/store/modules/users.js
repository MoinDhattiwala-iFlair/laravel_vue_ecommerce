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
    store(context, data) {
        return new Promise((resolve, reject) => {
            axios.post('/user/store', data.formData).then((result) => {
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    find(context, id) {
        return new Promise((resolve, reject) => {
            axios.get('/user/' + id).then((result) => {
                console.log('f result', result);
                resolve(result);
            }).catch((err) => {
                console.log('f err', err.response);
                reject(err.response);
            });
        });
    },
    update(context, data) {        
        return new Promise((resolve, reject) => {
            axios.post('/user/' + data.id + '/update', data.formData).then((result) => {
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    delete(context, user) {
        return new Promise((resolve, reject) => {
            axios.delete('/user/' + user.id).then((result) => {
                context.commit('remove', user.index);
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
};
const mutations = {
    setUsers(state, users) {
        state.users = users;
    },
    remove(state, index) {
        state.users.splice(index, 1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}