import axios from '../../plugins/axios'
const state = {
    posts: {}
};
const getters = {
    all(state, getters) {
        return state.posts;
    },
};
const actions = {
    get(context) {
        return new Promise((resolve, reject) => {
            axios.get('/post').then((result) => {
                context.commit('set', result.data.posts);
                resolve();
            }).catch((err) => {
                reject(err.response);
            });           
        });
    },
    find(context, slug) {
        return new Promise((resolve, reject) => {
            axios.get('/post/' + slug).then((result) => {                
                resolve(result.data.post);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    postDetail(context, slug) {
        return new Promise((resolve, reject) => {
            axios.get('/post_detail/' + slug).then((result) => {
                resolve(result.data.post);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    store(context, post) {
        return new Promise((resolve, reject) => {
            axios.post('/post', post.formData).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    update(context, post) {
        return new Promise((resolve, reject) => {
            axios.post('/post/' + post.slug, post.formData).then((result) => {
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
    delete(context, post) {
        return new Promise((resolve, reject) => {
            axios.delete('/post/' + post.slug).then((result) => {
                context.commit('remove', post.index);
                resolve(result.data);
            }).catch((err) => {
                reject(err.response);
            });
        });
    },
};
const mutations = {
    set(state, posts) {
        state.posts = posts;
    },
    remove(state, index) {
        state.posts.splice(index, 1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}