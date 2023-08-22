import { createApp } from 'vue'
import App from './App.vue'
import router from './router.js'


// router를 추가하고싶으면 use(라우트명)
createApp(App)
            .use(router)
            .mount('#app')
