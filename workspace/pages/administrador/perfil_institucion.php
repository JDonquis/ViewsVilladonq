<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/VillaDonq/helpers/type_user.php"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/VillaDonq/routes/routes.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | User Profile</title>

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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
                        <div class="col-sm-6">
                            <h1>Perfil de la institución</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center square">
                                        <img class="profile-user-img"
                                            src="../../../img/complete_logo.png" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center mt-4">VillaDonq</h3>

                                    <p class="text-muted text-center"></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Estud. activos</b> <a class="float-right">922</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Estud. Graduados</b> <a class="float-right">2643</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Estud. desertores</b> <a class="float-right">87</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Personal docente</b> <a class="float-right">14</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Personal administrativo</b> <a class="float-right">10</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div>
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName"
                                                            placeholder="Nombre" value="VillaDonq">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputRif"
                                                    class="col-sm-2 col-form-label">Rif</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputRif"
                                                        placeholder="Rif"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputTel"
                                                        class="col-sm-2 col-form-label">Telefono</label>
                                                    <div class="col-sm-10">
                                                        <input type="Tel" class="form-control" id="inputTel"
                                                            placeholder="Tel">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail"
                                                        class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputDirección"
                                                    class="col-sm-2 col-form-label">Dirección</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputDirección"
                                                        placeholder="Dirección"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputInauguración" class="col-sm-2 col-form-label">Inauguración</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="inputInauguración"
                                                            placeholder="Inauguración" value="">
                                                    </div>
                                                </div>
                                             
                                                <div class="form-group row">
                                                    <label for="inputLema" class="col-sm-2 col-form-label">Lema</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputLema"
                                                            placeholder="Lema" value="La escuela del futuro ya llegó a prestarte a mejor educación">
                                                    </div>
                                                </div>
                                             
                                          
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn_submit mt-0">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>