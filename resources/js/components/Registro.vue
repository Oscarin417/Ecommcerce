<template>
    <div class="card">
            <form>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombre(s)</label>
                    <input type="text" name="nombres" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" name="telefono" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="cp" class="form-label">Codigo Postal</label>
                    <input type="text" name="cp" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" name="municipio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="colonia" class="form-label">Colonia</label>
                    <input type="text" name="Colonia" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Registrarse</button>
            </form>
        </div>
</template>