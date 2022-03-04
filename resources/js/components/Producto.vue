<template>
    <div class="row">
        <div class="card" style="width: 18rem;">
            <div v-for="pro in productos" :key="pro.id">
                <img src="{{asset('storage/'.pro.imagen)}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{pro.nombre}}</h5>
                    <h6 class="card-subtitle">${{pro.precio}}</h6>
                    <router-link class="btn btn-primary">Ver Detalles</router-link>
                </div>
            </div>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>