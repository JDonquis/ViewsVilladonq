<style>
    .subject {
        overflow: scroll;
        overflow-y: hidden;
    }
</style>
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

    <title>Planes de evaluación</title>
    <td>ver</td>
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

                            <h1 class="m-0">Planes de evaluación</h1>

                         
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body table-responsive p-0" >
                                    <table class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="max-width: 8px">Año</th>
                                                <th style="max-width: 37px">Momento</th>
                                                <th>Profesor</th>
                                                <th style="max-width: 80px;">Materia</th>
                                                <th>Fecha</th>
                                                <th>ver</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="years"">1</td>
                                                <td class="momento"">1</td>
                                                <td>Jepsenia Avila</td>
                                                <td class="subject" style="max-width: 120px;">Biología</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">2</td>
                                                <td class="momento">3</td>
                                                <td>Yocellyn Hernandez</td>
                                                <td class="subject" style="max-width: 120px;">Mátematica</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">4</td>
                                                <td class="momento">1</td>
                                                <td class="teachers">Jordan Peterson</td>
                                                <td class="subject" style="max-width: 120px;">Inglés y Otras Lenguas Extranjeras</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">4</td>
                                                <td class="momento">2</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Castellano</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">2</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Educación Física</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">1</td>
                                                <td class="momento">2</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Física</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">3</td>
                                                <td class="momento">3</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Química</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">3</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Ciencias Naturales</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">4</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Ciencias de la Tierra</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">2</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Orientación y Convivencia</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">3</td>
                                                <td class="momento">2</td>
                                                <td class="teachers">
                                                  
                                                </td>
                                                <td class="subject" style="max-width: 120px;">Geografía, Historia y ciudadanía</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>

                                            </tr>
                                            <tr>
                                                <td class="years">2</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Arte y Patrimonio</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">3</td>
                                                <td class="momento">1</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;"> Formación para la Soberanía Nacional</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
                                            </tr>
                                            <tr>
                                                <td class="years">3</td>
                                                <td class="momento">3</td>
                                                <td></td>
                                                <td class="subject" style="max-width: 120px;">Participación en Grupos de Creación, Recreación y Producción</td>
                                                <td><time>26/06</time></td>
                                                <td>ver</td>
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
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>




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
            })

        });
        setTimeout(() => {
            const dataTableHeader = document.querySelector("#DataTables_Table_0_filter.dataTables_filter")
            const card_header = document.querySelector(".card-header").appendChild(dataTableHeader)
        }, 100);
    </script>

</body>

</html>