<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="https://vuejs.org/images/logo.svg" alt="" width="30" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="#">QuienesSomos</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="#">QSM</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="/productos">Productos</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="#"><i class="fa-solid fa-cart-shopping"></i></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="#">Contacto</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" to="#">Comentarios</router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">LogIn</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link to="#">Usuarios</router-link></li>
                                <li><router-link to="#">Empleados</router-link></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Registro</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link to="#">Usuarios</router-link></li>
                                <li><router-link to="#">Empleados</router-link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <router-view />
        </div>
    </main>
</template>