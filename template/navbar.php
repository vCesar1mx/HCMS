        <?php if(!isset($_COOKIE['logged'])){?>
        <!-- NAVBAR NOT LOGGED -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="<?php echo $url;?>">
                    <img src="<?php echo $icono;?>" height="32" alt="" loading="lazy" style="margin-top: -1px;">
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse text-center" id="navbarButtonsExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $servername;?></a>
                        </li>
                    </ul>
                    </div>
                <div class="collapse navbar-collapse text-center" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="./foro/">Foro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./shop/">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sanciones/">Sanciones</a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex text-center" style="justify-content:center;">
                        <button type="button" class="btn btn-dark px-3 me-2">
                            Login
                        </button>
                        <button type="button" class="btn btn-primary me-3">
                            Registro
                        </button>
                        <a class="btn btn-dark px-3" href="https:/discord.haliacraft.com" role="button"><i
                                class="fab fa-discord"></i></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- END NAV NOT LOGGED-->
        <?php } else{ ?>
        <!-- USER ALREADY LOGGED -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="<?php echo $url;?>">
                    <img src="<?php echo $icono;?>" height="32" alt="" loading="lazy" style="margin-top: -1px;">
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse text-center" id="navbarButtonsExample" style="width:min-content;">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $servername;?></a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse text-center" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="./foro/">Foro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./shop/">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sanciones/">Sanciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/">Perfil</a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex text-center" style="justify-content:center;">
                        <a class="btn btn-dark px-3" href="https:/discord.haliacraft.com" role="button"><i
                                class="fab fa-discord"></i></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- USER ALREADY LOGGED -->
        <?php }?>