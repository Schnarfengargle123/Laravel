require('./bootstrap');

import {createApp} from 'vue';
import Welcome from './components/Welcome';
import '../css/app.css';

const app = createApp({});

app.component('welcome', Welcome);

app.mount('#app');