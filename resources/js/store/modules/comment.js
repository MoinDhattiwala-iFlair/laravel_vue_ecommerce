import axios from '../../plugins/axios'
const state = {
    comments: {}
};
const getters = {};
const actions = {
    store(context, data) {
        return new Promise((resolve, reject) => {
            axios.post('/post/' + data.post + '/comment', {
                comment: data.comment
            }).then((result) => {
                console.log('a result', result.data);
                resolve(result.data);
            }).catch((err) => {
                console.log('a err.response', err.response);
                reject(err.response);
            });
        });
    },
    update(context, data) {
        return new Promise((resolve, reject) => {
            axios.post('/comment/' + data.id, {
                comment: data.comment
            }).then((result) => {
                console.log('a result', result.data);
                resolve(result.data);
            }).catch((err) => {
                console.log('a err.response', err.response);
                reject(err.response);
            });
        });
    },
    delete(context, id) {
        return new Promise((resolve, reject) => {
            axios.delete('comment/' + id).then((result) => {
                console.log('a result', result.data);
                resolve(result.data);
            }).catch((err) => {
                console.log('a err.response', err.response);
                reject(err.response);
            });
        });
    }
};
const mutations = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}