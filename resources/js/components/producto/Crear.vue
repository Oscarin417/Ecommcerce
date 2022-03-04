<template>
    <div class="container">
        <form @submit.prevent="crear">
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="precio">Precio</label>
                <input type="text" name="precio" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" class="form-control">
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
                <textarea name="descripcion" class="form-control"></textarea>
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
    name: "crear-producto",
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
    methods:{
        crear(){
            this.axios.post('/api/producto', this.producto)
                .then(response=>{
                    this.$router.push({name:"mostrarProductos"})
                })
                .catch(error=>{
                    console.log('error')
                })
        }
    }
}
</script>