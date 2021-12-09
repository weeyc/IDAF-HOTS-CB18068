import Home from './components/Home';
import About from './components/About';



export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [

        {
            path: '/',
            component: Home,
            name: "Home"
        },
        {
            path: '/about',
            component: About
        },



    ]
}
