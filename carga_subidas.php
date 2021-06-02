
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
            <a class="navbar-brand" href="admin.php">Transporta</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <a class="dropdown-item" href="db/logout.php">Cerrar seción</a>
                    </div>
                </li>
            </ul>
        </nav>
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
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i> Cargas
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    include 'db/conexcion.php';
                    $query = 'SELECT * FROM nombre_tabla';
                    $query_rum = 'mysqli_query($con,$query)';
                    ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Hora Publicacion</th>
                                    <th>telefono</th>
                                    <th>Recoger</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Horas</th>
                                    <th>opciones</th>
                                    <th>tipo de movil</th>
                                    <th>Dimensiones</th>
                                    <th>Peso</th>
                                    <th>Tasa oferta</th>
                                    <th>tipo de mercancia</th>
                                    <th>descripcion del producto</th>
                                    <th>eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_rum) > 0){
                                    while($row = mysqli_fetch_assoc($query_rum))
                                {
                                ?>
                                    <tr>
                                        <td>
                                            <?php  echo $row['id']; ?>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <?php  echo $row['telefono']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['recoger']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['origen']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['destino']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['hora']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['opciones']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['movil']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['dimencion']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['peso']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['oferta']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['mercancia']; ?>
                                        </td>
                                        <td>
                                            <?php  echo $row['descripcion']; ?>
                                        </td>
                                        <td class="actions">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                eliminar
                                            </button>
                                        </td>
                                    </tr>
                            </tbody>
                            <tfoot>
                                <tbody>
                                    <?php
                                    }

                                }else{
                                    echo 'No se pudod cargar los datos';
                                }
                                ?>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="content delete">
                            <h2>Delete Contact #
                                <?=$row['id']?>
                            </h2>
                            <?php if ($msg): ?>
                            <p>
                                <?=$msg?>
                            </p>
                            <?php else: ?>
                            <p>Are you sure you want to delete contact #
                                <?=$row['id']?>?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="yesno">
                            <a href="delete.php?id=<?=$row['id']?>&confirm=yes" type="button" class="btn btn-secondary">Yes</a>
                            <a href="delete.php?id=<?=$row['id']?>&confirm=no" type="button" class="btn btn-primary">No</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
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