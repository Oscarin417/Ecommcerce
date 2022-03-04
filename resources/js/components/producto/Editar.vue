<template>
    <div class="container">
        <form @submit.prevent="actualizar">
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" v-model="pro.nombre">
            </div>
            <div class="mb-3">
                <label class="form-label" for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" v-model="pro.precio">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" v-model="pro.cantidad">
            </div>
            <div class="mb-3">
                <label class="form-label" for="categoria">Categoria</label>
                <select name="categoria" class="form-select">
                    <option selected>Elije una categoria</option>
                    <option value="accion">Accion</option>
                    <option value="terror">Terror</option>
                    <option value="aventura">Aventura</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="descripcion">Descripcion</label>
                <textarea name="descripcion" class="form-control" v-model="pro.descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</template>
<script>
export default {
    name: "editar-producto",
    data(){
        return{
            producto:{
                nombre: "",
                precio: "",
                cantidad: "",
                categoria: "",
                descripcion: "",
                imagen: ""
            }
        }
    },
    mounted(){
        this.mostrarProducto
    },
    methods:{
        mostrarProducto(){
            this.axios.get('/api/producto/${this.$router.params.id}')
                .then(response=>{
                    const {nombre, precio, cantidad, categoria, descripcion, imagen} = response.data
                    this.producto.nombre = nombre,
                    this.producto.precio = precio,
                    this.producto.cantidad = cantidad,
                    this.producto.categoria = categoria,
                    this.producto.descripcion = descripcion,
                    this.producto.imagen = imagen
                })
                .catch(error=>{
                    console.log(error)
                })
        },
        actualizar(){
            this.axios.put('/api/producto/${this.route.params.id}', this.producto)
                .then(response=>{
                    this.$router.push({
                        name: "mostrarProductos"
                    })
                })
                .catch(error=>{
                    console.log(error)
                })
        }
    }
}
</script>