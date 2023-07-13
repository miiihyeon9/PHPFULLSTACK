require('./bootstrap');

import { createApp } from 'vue';
import App from './vue/App.vue';
// import store from '/store.js'

// createApp(App) = App.vue를 #app에 mount 하겠다.
// #app => public의 index.html의 id="app"
createApp(App)
        // .use(store)
        .mount('#app'); 