import VueRoute from 'vue-router'
import vue from 'vue'

//components

import test from './components/test'
import create from './components/post/create'

const routes=[
    {path:'/test',component: test,
    path:'/post/create',component: create}
];

Vue.use(VueRoute);
const router=new VueRoute({
    routes,
    mode:'history'
});
export default router