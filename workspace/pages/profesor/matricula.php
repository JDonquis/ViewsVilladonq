<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/VillaDonq/helpers/type_user.php"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/VillaDonq/routes/routes.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">

    <title>Matricula</title>
</head>

<body>


    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once "../../sections/_nav-bar.php"; ?>
        <!-- /.navbar -->

        <?php require_once('../../sections/_prof-menu.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <!-- SELECT2 EXAMPLE -->

                            <h1 class="m-0">Matricula</h1>

                            <div class="row mt-2">

                                <!-- /.col -->
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <label>Sección</label>
                                        <select class="form-control" data-dropdown-css-class="select2-primary" style="width: 100%;">
                                            <option selected="selected">5to A</option>
                                            <option>2do B</option>
                                            <option>2do C</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- /.col -->
                            </div>
                            <p>En esta sección hay 20 estudiantes y se imparten 2 materias (Inglés y biologia)</p>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <form class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-head-fixed text-nowrap table-striped table-bordered">
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
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </form>
                </div>
                <!-- /.row -->
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
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script> -->

    <script>
        $(function() {
            $("table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                'paging': false,
                "ordering": true,
                "buttons": ["excel", "pdf", "print", "colvis"],
            }).buttons().container().prependTo('.dataTables_filter');

        });
    </script>

</body>

</html>