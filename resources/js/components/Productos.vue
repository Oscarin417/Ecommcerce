<template>
    <div class="row">
        <div class="card" style="width: 18rem;" v-for="pro in productos" :key="pro.id">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{pro.nombre}}</h5>
                <h6 class="card-subtitle">${{pro.precio}}</h6>
                <router-link class="btn btn-primary" to="#">Comprar</router-link>
                <router-link class="btn btn-primary" to="#">Agregar al carrito</router-link>
            </div>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
export default {
    data (){
        return {
            productos: {
                id: '',
                nombre: '',
                precio: '',
                cantidad: '',
                categoria: '',
                descripcion: '',
                imagen: ''
            }
        }
    },
}
</script>