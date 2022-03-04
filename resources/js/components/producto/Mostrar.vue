<template>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <router-link :to='{name:"crearProductos"}' class="btn btn-primary">
                <i class="fa-solid fa-circle-plus"></i>
            </router-link>
        </div>
        <div class="col-12">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="pro in productos" :key="pro.id">
                        <td>{{pro.id}}</td>
                        <td>{{pro.nombre}}</td>
                        <td>${{pro.precio}}</td>
                        <td>{{pro.cantidad}}</td>
                        <td>{{pro.categoria}}</td>
                        <td>{{pro.descripcion}}</td>
                        <td><img src="{{asset('storage/'.pro.imagen)}}" width="33.3%"></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <router-link :to='{name:"editarProductos", params:{id:pro.id}}' class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </router-link>
                                <button class="btn btn-danger" type="button" @click="borrarProducto(pro.id)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    name:"productos",
    data(){
        return{
            productos:[]
        }
    },
    mounted(){
        this.mostrarProductos()
    },
    methods:{
        mostrarProductos(){
            this.axios.get('api/producto')
                .then(response=>{
                    this.productos = response.data
                })
                .catch(error=>{
                    this.product = []
                })
        },
        borrarProducto(id){
            if(confirm("¿Eliminar el registro?")){
                this.axios.delete('api/productos'+id)
                .then(response=>{
                    this.mostrarProductos()
                })
                .catch(error=>{
                    console.log('error')
                })
            }
        }
    }
}
</script>