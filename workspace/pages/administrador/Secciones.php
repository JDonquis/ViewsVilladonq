<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">
    <link rel="stylesheet" href="../../css/materias.css">

    <title>Secciones</title>
</head>

<body>


    <div class="wrapper">
        <?php require_once "../../../includes/_loader.php"; ?>
        <!-- Navbar -->
        <?php require_once "../../sections/_nav-bar.php"; ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php require_once('../../sections/_administrative-menu.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <!-- SELECT2 EXAMPLE -->

                            <h1 class="mb-3">Secciones</h1>
                                <label for="aulas">aulas  <input type="number" class="d-inline form-control col-3 ml-2" name="" value="20" id="aulas"></label>
                               
                                <p>Secciones: <b>19</b></p>
                                <p>Aulas libres: 1</p>
                               
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
           <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div id="accordion">
                        <article class="card">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 color-primary">
                                        1 - Primer año
                                    </h5>
                                    <p class="color-primary mb-0">Nro de secciones: <b>1</b></p>
                                    <p class="color-primary mb-0">Cantidad de estudiantes: <b>300</b></p>
                                </div>
                            </button>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"

                                data-parent="#accordion">
                                <div class="form-group">
                                        <button for='new_subject_name' class="mx-auto d-block add_btn">+ Crear sección</button>
                                        
                                    </div>
                                <div class="card-body table-responsive">
                                    
                                    <table id="table-1A" class="table display table-head-fixed text-nowrap table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nombres </th>
                                                <th>Apellidos</th>
                                                <th>Foto</th>
                                                <th>Cedula</th>
                                                <th>Edad</th>
                                                <th>Tel del representante</th>
                                                <th>correo</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Juan Francisco</td>
                                                <td>Villasmil Tovar</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>27253194</td>
                                                <td>22</td>
                                                <td>0426037352</td>
                                                <td>juanvillans16@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Dalexer noseque</td>
                                                <td>Colina Ramirez</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>29342184</td>
                                                <td>20</td>
                                                <td>0212438719</td>
                                                <td>dalexercivirigua@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Juan Diego</td>
                                                <td>Donquis Gonzales</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>30101010</td>
                                                <td>15</td>
                                                <td>0269356969</td>
                                                <td>mondonquis@gmail.com</td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </article>

                     
                        <article class="card">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 color-primary">
                                        2 - Segundo año año
                                    </h5>
                                    <p class="color-primary mb-0">Nro de secciones: <b>1</b></p>
                                    <p class="color-primary mb-0">Cantidad de estudiantes: <b>300</b></p>
                                </div>
                            </button>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"

                                data-parent="#accordion">
                                <div class="form-group">

                                        <button for='new_subject_name' class="mx-auto d-block add_btn">+ Crear sección</button>
                                        
                                    </div>
                                <div class="card-body table-responsive">
                                    
                                    <table id="table-2A" class="display table table-head-fixed text-nowrap table-bordered">
                                       <thead>
                                            <tr>
                                                <th>Nombres </th>
                                                <th>Apellidos</th>
                                                <th>Foto</th>
                                                <th>Cedula</th>
                                                <th>Edad</th>
                                                <th>Tel del representante</th>
                                                <th>correo</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Juan Francisco</td>
                                                <td>Villasmil Tovar</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>27253194</td>
                                                <td>22</td>
                                                <td>0426037352</td>
                                                <td>juanvillans16@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Dalexer noseque</td>
                                                <td>Colina Ramirez</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>29342184</td>
                                                <td>20</td>
                                                <td>0212438719</td>
                                                <td>dalexercivirigua@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Juan Diego</td>
                                                <td>Donquis Gonzales</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>30101010</td>
                                                <td>15</td>
                                                <td>0269356969</td>
                                                <td>mondonquis@gmail.com</td>
                                            </tr>

                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </article>

                        <article class="card">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0 color-primary">
                                        3 - Tercer año
                                    </h5>
                                    <p class="color-primary mb-0">Nro de secciones: <b>1</b></p>
                                    <p class="color-primary mb-0">Cantidad de estudiantes: <b>300</b></p>
                                </div>
                            </button>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"

                                data-parent="#accordion">
                                <div class="form-group">

                                        <button for='new_subject_name' class="mx-auto d-block add_btn">+ Crear sección</button>
                                        
                                    </div>
                                <div class="card-body table-responsive">
                                    
                                    <table id="table-3A" class="display table table-head-fixed text-nowrap table-bordered">
                                       <thead>
                                            <tr>
                                                <th>Nombres </th>
                                                <th>Apellidos</th>
                                                <th>Foto</th>
                                                <th>Cedula</th>
                                                <th>Edad</th>
                                                <th>Tel del representante</th>
                                                <th>correo</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Juan Francisco</td>
                                                <td>Villasmil Tovar</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>27253194</td>
                                                <td>22</td>
                                                <td>0426037352</td>
                                                <td>juanvillans16@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Dalexer noseque</td>
                                                <td>Colina Ramirez</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>29342184</td>
                                                <td>20</td>
                                                <td>0212438719</td>
                                                <td>dalexercivirigua@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Juan Diego</td>
                                                <td>Donquis Gonzales</td>
                                                <td><a href="#">ver foto</a></td>
                                                <td>30101010</td>
                                                <td>15</td>
                                                <td>0269356969</td>
                                                <td>mondonquis@gmail.com</td>
                                            </tr>

                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

    
   

    </div>
    <!-- /.content-wrapper -->
    <?php require_once "../../sections/_footer.php"; ?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>


    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script> -->

    <script>
    $(document).ready(function() {
    $("table.display").DataTable( {
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        'paging': false,
        "ordering": true,
    } );
} );
    </script>

</body>

</html>
