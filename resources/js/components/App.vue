<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href='/'>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='/quienessomos'>Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='/qsm'>QSM</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link active" href="/productos">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='#'>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='/contacto'>Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='/comentarios'>Comentarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LogIn
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href='/empleados/login'>Empleados</a></li>
                                <li><a class="dropdown-item" href='/usuarios/login'>Clientes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resgistro
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href='/empleados/register'>Empleados</a></li>
                                <li><a class="dropdown-item" href='/usuarios/registro'>Clientes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>