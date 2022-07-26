        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('views/dashboard.php','content-wrapper')">
                        Tablero
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/productos.php','content-wrapper')">
                        Inventario
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/cargamasiva.php','content-wrapper')">
                        Carga Masiva
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/categorias.php','content-wrapper')">
                        Categorias
                    </a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/ventas.php','content-wrapper')">
                        Ventas
                    </a>
                </li> -->
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/compras.php','content-wrapper')">
                        Compras
                    </a>
                </li> -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/reportes.php','content-wrapper')">
                        Registrar
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/configuracion.php','content-wrapper')">
                        Iniciar Sesion
                    </a>
                </li>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">USUARIO</span>
                        <img class="img-profile rounded-circle" src="">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->