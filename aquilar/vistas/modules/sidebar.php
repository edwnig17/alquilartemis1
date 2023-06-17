<aside class="main-sidebar sidebar-ligth-orange elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-orange ">
        <img src="vistas/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/assets/img/" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Angie Suarez</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column orange" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/"
                        class="nav-link <?php if($routerArray[4]=='clientes') : ?> active <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/users"
                        class="nav-link <?php if($routerArray[4]=='users') : ?> active <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Empleados
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/clinicHistori"
                        class="nav-link <?php if($routerArray[4]=='clinicHistori') : ?> active <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Productos
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/psychologits"
                        class="nav-link <?php if($routerArray[4]=='psychologits') : ?> active <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Inventarios
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/entrada"
                        class="nav-link <?php if($routerArray[4]=='entrada') : ?> <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Entrada
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/salida"
                        class="nav-link <?php if($routerArray[4]=='salida') : ?>  <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Salida
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/entradaDetalle"
                        class="nav-link <?php if($routerArray[4]=='entradaDetalle') : ?> <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Entrada Detalle
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/SkylAb-112/alquilartemis/aquilar/salidaDetalle"
                        class="nav-link <?php if($routerArray[4]=='salidaDetalle') : ?> <?php endif ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Salida Detalle
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->