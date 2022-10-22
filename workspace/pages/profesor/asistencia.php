
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">

    <link rel="stylesheet" href="../../css/asistencia.css">
    <title>Asistencia</title>
</head>

<body>


    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once "../../sections/_nav-bar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once('../../sections/_prof-menu.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- SELECT2 EXAMPLE -->

                            <h1>Control de asistencia</h1>
                            <div class="row mt-2">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Sección</label>
                                        <select class="form-control select2 select2-primary"
                                            data-dropdown-css-class="select2-primary" style="width: 100%;">
                                            <option selected="selected">5to A</option>
                                            <option>2do C</option>
                                            <option>2do B</option>
                                            
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6">
                                    <form class="form-group">
                                        <label>Lapsos</label>

                                        <div class="d-flex">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                    name="customRadio" checked>
                                                <label for="customRadio1" class="custom-control-label">1</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-4">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                    name="customRadio">
                                                <label for="customRadio2" class="custom-control-label">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio3"
                                                    name="customRadio">
                                                <label for="customRadio3" class="custom-control-label">3</label>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                <!-- /.col -->
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Simple Tables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card card_all_table">
                                <div class="card-header intro_table justify-content-between">
                                    <div class="form-group float-left d-sm-flex align-items-center mt-2 mb-0">
                                        <i title="revertir cambio"
                                            class=" disabled fa-solid history_arrows past  fa-arrow-rotate-left"></i>
                                        <i title="volver al cambio"
                                            class="fa-solid history_arrows future fa-arrow-rotate-right disabled ml-2 mr-4"></i>
                                        <div class="form-check mr-4">
                                            <input class="form-check-input" type="checkbox" id="marcar_todos">
                                            <label class="form-check-label" for="marcar_todos">
                                                Marcar todos asistentes
                                            </label>
                                        </div>
                                        <span class="d-flex align-items-center my-3 my-sm-0">
                                            <label for="input_n_classes" class="mb-0 pl-sm-5">Número de clases</label>
                                            <input type="number" value="13" class="p-1 ml-2 form-control"
                                                id="input_n_classes">
                                        </span>
                                    </div>
                                    <div class="float-sm-right">
                                        <span class="parent_btn_submit ">
                                            <input type="submit" title='Ctrl + s' name="" value="GUARDAR"
                                                class=" btn_submit mt-0">
                                        </span>
                                    </div>

                            
                                    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="max-height: 500px;">
                                    <table class="asist_table table table-head-fixed text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th_students"> Estudiantes (17)</th>
                                                <th>
                                                    <label for="c1" title="marcar toda la columna 1 "> 1
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c1">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c2" title="marcar toda la columna 2 "> 2
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c2">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c3" title="marcar toda la columna 3 "> 3
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c3">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c4" title="marcar toda la columna 4 "> 4
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c4">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c5" title="marcar toda la columna 5 "> 5
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c5">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c6" title="marcar toda la columna 6 "> 6
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c6">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c7" title="marcar toda la columna 7 "> 7
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c7">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c8" title="marcar toda la columna 8 "> 8
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c8">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c9" title="marcar toda la columna 9 "> 9
                                                        <input type="checkbox" class="marcar_col_input" name="" id="c9">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c10" title="marcar toda la columna 10 "> 10
                                                        <input type="checkbox" class="marcar_col_input" name=""
                                                            id="c10">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c11" title="marcar toda la columna 11 "> 11
                                                        <input type="checkbox" class="marcar_col_input" name=""
                                                            id="c11">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c12" title="marcar toda la columna 12 "> 12
                                                        <input type="checkbox" class="marcar_col_input" name=""
                                                            id="c12">
                                                    </label>
                                                </th>
                                                <th>
                                                    <label for="c13" title="marcar toda la columna 13 "> 13
                                                        <input type="checkbox" class="marcar_col_input" name=""
                                                            id="c13">
                                                    </label>
                                                </th>

                                                <th class="th_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <label for="1" title='marcar toda la fila'>

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="1">
                                                        <span class="student_name">Fulanito perez</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_cell "></td>
                                                <td class="each_total">0%</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label for="2">
                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="2">
                                                        <span class="student_name">pantaleona cabezona</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="3">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="3">
                                                        <span class="student_name">Dolores Pecho Barba</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="4">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="4">
                                                        <span class="student_name"> Alan brito</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="5">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="5">
                                                        <span class="student_name"> Ernan Juliao</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="6">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="6">
                                                        <span class="student_name"> Susán Diaz</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="7">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="7">
                                                        <span class="student_name"> Clarck kent</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="8">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="8">
                                                        <span class="student_name"> Bruce Wayne</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="9">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="9">
                                                        <span class="student_name"> Princesa Diana</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="10">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="10">
                                                        <span class="student_name"> Barry Allen</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="11">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="11">
                                                        <span class="student_name"> Arthur Curry</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="12">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="12">
                                                        <span class="student_name"> John Jones</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="13">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="13">
                                                        <span class="student_name"> Alan brito</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="14">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="14">
                                                        <span class="student_name"> Alan brito</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="15">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="15">
                                                        <span class="student_name"> Alan brito</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="16">

                                                        <input type="checkbox" class="marcar_fila_input mr-1" name=""
                                                            id="16">
                                                        <span class="student_name"> Silvestre Dangóng</span>
                                                    </label>
                                                </td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_cell"></td>
                                                <td class="each_total">0%</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                </div>
                <!-- /.row -->
            </section>
        </div><!-- /.container-fluid -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once "../../sections/_footer.php"; ?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>



    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="../../dist/js/adminlte.js"></script> 
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="../../dist/js/pages/dashboard.js"></script> -->
    <script src="../../js/asistencia.js"></script>
</body>

</html>