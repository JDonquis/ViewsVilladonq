<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "/VillaDonq/helpers/type_user.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/VillaDonq/controller/request_controller.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/VillaDonq/routes/routes.php";


if (isset($_SESSION["username"]) and isset($_SESSION["password"]))
  $requests = Request_controller::get_Requests();

else {

  header("index.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Workspace</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="./css/request.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">


  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once "./sections/_nav-bar.php"; ?>
    <!-- /.navbar -->

    <!-- Lateral-menu -->
    <?php include_once "./sections/_administrative-menu.php"; ?>
    <!-- /.Lateral-menu -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Solicitudes de Inscripción</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Solicitudes</a></li>
                <li class="breadcrumb-item active">Workspace</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="w-100 text-center mt-5">
            <button class="btn btn-primary filter" id="filter-no-check">En espera</button>
            <button class="btn btn-success filter" id="filter-accept">Aceptados</button>
            <button class="btn btn-danger filter" id="filter-rejected">Rechazados</button>
          </div>
        </div><!-- /.container-fluid -->
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="message-box rounded ">

            <div class=" d-flex flex-column w-100 text-center pb-4 ">
              <p>¿Esta seguro que quiere realizar esta accion?</p>
            </div>
            <div class="d-flex flex-row w-100 justify-content-around">
              <button type="button" id="confirm" class="btn btn-primary">Confirmar</button>
              <button type="button" id="back" class="btn btn-primary">Atras</button>
            </div>
            <div class=" text-right px-3 pt-2"><label class="text-normal p-1" for="">No mostrar mas</label><input type="checkbox" value="-1" id="show_confirm"></div>
          </div>
          <div class="row">
            <?php include "./sections/_requests-table.php"; ?>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php require_once "sections/_footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- /.content-wrapper -->



  <?php require_once "sections/_footer.php"; ?>


  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="./plugins/jszip/jszip.min.js"></script>
  <script src="./plugins/pdfmake/pdfmake.min.js"></script>
  <script src="./plugins/pdfmake/vfs_fonts.js"></script>
  <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./dist/js/adminlte.js"></script>

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

  <script src="./js/modules/requests.js" type="module"></script>
</body>

</html>