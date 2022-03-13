<template>
    <div class="container">
        <div class="card text-cemter">
            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-success">Iniciar Sesion</button>
            </form>
            <p class="card-text"><a href="/usuarios/registro">Crear Cuenta</a></p>
        </div>
    </div>
</template>