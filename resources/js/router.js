import VueRouter from 'vue-router';
import Home from './components/ExampleComponent.vue';

const routes =[
    { path:'/', component: Home}
];

const router = new VueRouter({ routes });

export default router;