import { createWebHistory, createRouter } from "vue-router";
import ListComponent from "./components/ListComponent.vue";

const routes = [
    {
        path: '/list',
        component: ListComponent,
    }
];

const  router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;