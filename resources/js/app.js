require('./bootstrap');

import {createApp} from 'vue';
import {createRouter, createWebHashHistory} from 'vue-router';
// import * from './pages';
import Welcome from './pages/Welcome';
import Auth from './pages/Auth';
import Products from './pages/Products';
import '../css/app.css';

const routes = [
  { path: '/', component: Welcome },
  { path: '/welcome', component: Welcome },
  { path: '/auth', component: Auth },
  { path: '/products', component: Products },
];

const router = createRouter({history: createWebHashHistory(), routes});

const app = createApp({});

app.use(router);

app.component('welcome', Welcome);

app.mount('#app');