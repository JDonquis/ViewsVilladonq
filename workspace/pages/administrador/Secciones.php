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

                            <h1 class="m-0">Secciones</h1>

                            <div class="row mt-2">

                                <!-- /.col -->
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <button for='new_subject_name' class="add_btn"></button>
                                        <!-- <input type="text" name="new_subject_name" id="new_subject_name"> -->
                                    </div>
                                </div>

                                <!-- /.col -->
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card"  style='max-width: 620px'>
                                <div class="card-header"></div>
                                <div class="card-body table-responsive p-0" >
                                    <table class="table-head-fixed table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Materias (14)</th>
                                                <th>Años</th>
                                                <th>Acción</th>
                                                <th>Profesores</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="subject">Biología</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col ">-</span><span class="col">-</span><span class="col">3</span><span class="col ">4</span><span class="col ">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Mátematica</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Inglés y Otras Lenguas Extranjeras</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td class="teachers">
                                                    <ul >
                                                        <li>D. Matheus (1, 2, 3), </li>
                                                        <li>J. Cristina (4, 5), </li>
                                                        <li>D. Matheus (1, 2, 3)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Castellano</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Educación Física</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Física</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">-</span><span class="col">-</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Química</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">-</span><span class="col">-</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Ciencias Naturales</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">-</span><span class="col">-</span><span class="col">-</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Ciencias de la Tierra</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">-</span><span class="col">-</span><span class="col">-</span><span class="col">-</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Orientación y Convivencia</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Geografía, Historia y ciudadanía</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td class="teachers">
                                                    <ul >
                                                        <li>H. Harrinson (1, 2, 3),</li>
                                                        <li>D. Matheus (1, 2, 3) ,</li>
                                                        <li>P. Cruzanda (2, 4),</li>
                                                        <li>M. Hernandez (4, 5),</li>
                                                        <li>J. Cristina (4, 5),</li>
                                                        <li>J. Cristina (4, 5),</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Arte y Patrimonio</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">-</span><span class="col">-</span><span class="col">-</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject"> Formación para la Soberanía Nacional</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">-</span><span class="col">-</span><span class="col">-</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="subject">Participación en Grupos de Creación, Recreación y Producción</td>
                                                <td class="years">
                                                    <ul class="text-center row">
                                                        <span class="col">1</span><span class="col">2</span><span class="col">3</span><span class="col">4</span><span class="col">5</span>
                                                    </ul>
                                                </td>
                                                <td class="action"><i class="fas fa-edit"></i> -- X</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <!-- /.row -->
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
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
        setTimeout(() => {
            const dataTableHeader = document.querySelector("#DataTables_Table_0_filter.dataTables_filter")
            const card_header = document.querySelector(".card-header").appendChild(dataTableHeader)
        }, 100);
    </script>

</body>

</html>
