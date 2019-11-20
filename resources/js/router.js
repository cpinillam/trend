import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import Contact from './views/Contact.vue';

const routes =[
    { path:'/', component: Home },
    { path:'/Contact', component: Contact }
];

const router = new VueRouter({ routes });

export default router;