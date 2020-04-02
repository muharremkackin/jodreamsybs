import Vue from 'vue';
import VueRouter from 'vue-router';
import store from "./store";
import DashboardHome from './views/dashboard/Home';
import DashboardLogin from './views/dashboard/Login';

import Hr from './views/hr/Hr';
import HrHome from './views/hr/Home';
import HrPersonals from './views/hr/Personals';
import HrLeaves from './views/hr/Leaves';
import HrDepartments from './views/hr/Departments';
import HrPayrolls from './views/hr/Payrolls';
import FourOFour from './views/dashboard/FourOFour';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard/',
            name: 'dashboard.home',
            component: DashboardHome,
            meta: {
                requiresAuth: true,
            }
        },
        {
            path: '/dashboard/login',
            name: 'dashboard.login',
            component: DashboardLogin,
            meta: {
                guest: true,
            }
        },
        {
            path: '/dashboard/hr/',
            name: 'dashboard.hr.home',
            component: Hr,
            meta: {
                requiresAuth: true,
            },
            children: [
                {path: '', component: HrHome},
                {path: 'personals', component: HrPersonals},
                {path: 'departments', component: HrDepartments},
                {path: 'leaves', component: HrLeaves},
                {path: 'payrolls', component: HrPayrolls},
            ]
        },
        {
            path: '/dashboard/*',
            name: 'dashboard.four-o-four',
            component: FourOFour
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.isLoggedIn) {
            next();
            return;
        }
        next('dashboard/login');
    }
    if (to.matched.some(record => record.meta.guest)) {
        if (!store.getters.isLoggedIn) {
            next();
            return;
        }
        next('dashboard/');
    } else {
        next()
    }
});

export default router;
