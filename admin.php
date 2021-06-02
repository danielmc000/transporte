<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/transporta 1.2.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-blue">
        <a class="navbar-brand" href="index2.html">Transporta</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="cambiarContraseña.html">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <form action="db/code.php" method="POST">

                        <button type="submit" name="logout_btn" class="btn btn-primary">Cerrar Sesión</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills bg-dark">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cargamento</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="nueva_carga.html">Nueva Carga</a>
                <a class="dropdown-item" href="carga_subidas.html">Cargamentos suvidas</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configuracion usuario</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="registrousuario.html">Registro de usuario</a>
                <a class="dropdown-item" href="usuarioTrans.html">Usuario Transportista</a>
                <a class="dropdown-item" href="usuarioEnco.html">Usuario Encomiendas</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Usuario</a>
        </li>
    </ul>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Administrador</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Administrador</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Nueva Carga</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="nueva_carga.html">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Usuarios</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="usuarioadm.html">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Morosos</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="moroso.html">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i>Usuario Nuevos
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i> Viajes Realizados
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i> Transportistas
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            < <th>Hora Publicacion</th>
                                                <th>Estado</th>
                                                <th>Recoger</th>
                                                <th>Origen</th>
                                                <th>Destino</th>
                                                <th>Horas</th>
                                                <th>Dimensiones</th>
                                                <th>Peso</th>
                                                <th>Tasa de oferta</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Hora Publicacion</th>
                                            <th>Estado</th>
                                            <th>Recoger</th>
                                            <th>Origen</th>
                                            <th>Destino</th>
                                            <th>Horas</th>
                                            <th>Dimensiones</th>
                                            <th>Peso</th>
                                            <th>Tasa de oferta</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Conectado Como:</div>
        Start Bootstrap
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>