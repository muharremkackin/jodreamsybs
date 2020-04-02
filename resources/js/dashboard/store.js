import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
       status: '',
       token: localStorage.getItem('token') || '',
       user: {},
       permissions: localStorage.getItem('permissions') || '',
   },
    mutations: {
        auth_request(state){
            state.status = 'loading';
        },
        auth_success(state, token, user) {
            state.status = 'success';
            state.token = token;
            state.user = user;
        },
        auth_error(state) {
            state.status = 'error';
        },
        logout(state){
            state.status = '';
            state.token = '';
        }
    },
    actions: {
        login({commit},user) {
            return new Promise(((resolve, reject) => {
                commit('auth_request');
                axios({url: '/login', data: user,method: 'POST'})
                    .then(response => {
                        const token = response.data.token;
                        const user = response.data.user;
                        const permissions = response.data.permissions;
                        console.log(permissions);
                        localStorage.setItem('token', token);
                        localStorage.setItem('permissions', permissions);
                        axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
                        commit('auth_success', token, user);
                        resolve(response);
                    })
                    .catch(error => {
                        commit('auth_error');
                        localStorage.removeItem('token');
                        reject(error);
                    })
            }))
        },
        logout({commit}) {
            return new Promise(((resolve, reject) => {
                commit('logout');
                localStorage.removeItem('token');
                delete axios.defaults.headers.common['Authorization'];
                resolve();
            }))
        }
    },
    getters: {
        isLoggedIn: state => !!state.token,
        authStatus: state => state.status,
    }
});
