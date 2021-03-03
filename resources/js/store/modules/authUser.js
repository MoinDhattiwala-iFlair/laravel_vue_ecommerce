import axios from "../../plugins/axios";

const state = {
    user: {}
};
const getters = {
    authUser(state, getters) {
        return state.user;
    }
};

const actions = {
    loginUser(context, user) {
        console.log('user', user);
        return new Promise((resolve, reject) => {
            axios.post('/login', user).then((result) => {
                console.log('a result', result);
                localStorage.setItem('auth_token', result.data.token)
                localStorage.setItem('auth_user', JSON.stringify(result.data.user));
                context.commit('setUser')
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    registerUser(context, user) {
        console.log('user', user);
        return new Promise((resolve, reject) => {
            axios.post('/register', user).then((result) => {
                console.log('a result', result);
                localStorage.setItem('auth_token', result.data.token)
                localStorage.setItem('auth_user', JSON.stringify(result.data.user));
                context.commit('setUser')
                resolve(result);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    setAuthUser(context) {
        context.commit('setUser')
    },
    logout(context) {
        //axios.get('/logout');
        localStorage.clear();
        context.commit('setUser')
    },
};

const mutations = {
    setUser(state) {
        state.user = JSON.parse(localStorage.getItem('auth_user'));
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}