const Home = ()=> import('./components/Home.vue');
const Producto = ()=> import('./components/Producto.vue');

//Componentes para producto
const Mostrar = ()=> import('./components/producto/Mostrar.vue');
const Crear = ()=> import('./components/producto/Crear.vue');
const Editar = ()=> import('./components/producto/Editar.vue');

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'producto',
        path: '/producto',
        component: Producto
    },
    {
        name: 'mostrarProductos',
        path: '/productos',
        component: Mostrar
    },
    {
        name: 'crearProductos',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarProductos',
        path: '/editar/:id',
        component: Editar
    }
]