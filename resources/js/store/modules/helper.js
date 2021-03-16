import axios from '../../plugins/axios'
const state = {
    categoriesWithSubCategory : {},
};
const getters = {
    allCategoriesWithSubCategory(state, getters) {
        return state.categoriesWithSubCategory;
    },
};
const actions = {
    getCategoriesWithSubCategory(context) {
        return new Promise((resolve, reject) => {
            axios.post('/globalaction', { action: 'getCategoryWithSubCategory'}).then((result) => {
                context.commit('setCategoriesWithSubCategory', result.data.categories)
                resolve();
            }).catch((err) => {
                reject(err.response);
            });
        });        
    },
};
const mutations = {
    setCategoriesWithSubCategory(state, categoriesWithSubCategory) {
        state.categoriesWithSubCategory = categoriesWithSubCategory;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}