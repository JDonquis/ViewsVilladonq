<style type="text/css">


</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/secciones.css">
    <title>Secciones</title>
</head>

<body>
    <div class="tooltip_child change_box d-none" data-year='1'>
        <p class="mb-1"> Cambiar a la sección: </p>
        <div class="d-flex">

            <select class="w-75 form-control text-bold" data-use="select_new_section" id="" name="">
                <option selected="selected">1A</option>
                <option>1B</option>
                <option>1C</option>
                <option>1D</option>
                <option>1E</option>
            </select>
            <span class="w-25  parent_btn_submit">
                <i title="Cambiar" class="btn_submit rounded mt-0 btn_change_acept fas fa-person-walking-dashed-line-arrow-right"></i>
            </span>

        </div>
    </div>

    <div class="wrapper">
        <?php require_once "../../../includes/_loader.php"; ?>
        <!-- Navbar -->
        <?php require_once "../../sections/_nav-bar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once "../../sections/_administrative-menu.php"; ?>


        <input type="hidden" id="input-id" value="1">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <!-- SELECT2 EXAMPLE -->

                            <h1 class="mb-3">Secciones</h1>
                            <label for="aulas">aulas <input min="19" type="number" class="d-inline form-control col-3 ml-2" name="" value="20" id="total_rooms"></label>
                            <p>Secciones: <b id="total_sections">19</b></p>
                            <p>Aulas libres: <b id="free_classrooms">1</b></p>

                        </div>

                    </div>

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid" id="content_itself">

                    <nav class="nav_fixed">

                        <i data-year="1" title="Cambiar de sección" class=" btn_change_all position-relative d-none  fas fa-person-walking-dashed-line-arrow-right"></i>

                        <span class="parent_btn_submit ">
                            <input title='Ctrl + s' type="submit" name="save-date" value="Guardar" class="btn_submit p-2 mt-0" id=""></span>

                    </nav>
                    <div id="accordion">


                        <article class="card each_year" data-year='1'>
                            <button class="button_year btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="P-3" id="headingOne">
                                    <h3 class="mb-0 color-primary">
                                        1 - Primer año
                                    </h3>
                                    <p class="color-primary mb-0">Nro de secciones: <b class="nSections" data-year="1">2</b></p>
                                    <p class="color-primary mb-0">Cantidad total de estudiantes: <b class="nStudents" data-year="1">30</b></p>
                                </div>
                            </button>

                            <div id="collapseOne" data-year='1' class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">

                                <div class="form-group">
                                    <!-- task for Donquis: add the total number of sections in this year -->
                                    <button data-year='1' data-nsections="2" for='new_subject_name' class="mx-auto d-block d-none add_btn">+ Crear sección</button>
                                </div>
                                <article class="each_section" data-section="1A">
                                    <div class="position-absolute Pl-4 pb-0">
                                        <div class="mx-auto">
                                            <h4 class="h4">Sección 1A </h4>
                                            <p>matricula: <b class="n_students" data-section="1A">6</b> </p>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table data-year="1" data-section="1A" class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th data-priority="1">Nombres </th>
                                                    <th>Apellidos</th>
                                                    <th>Foto</th>
                                                    <th>Cedula</th>
                                                    <th>Edad</th>
                                                    <th>Tel del representante</th>
                                                    <th>correo</th>
                                                    <th data-priority="2">acción</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Francisco</td>
                                                    <td>Villasmil Tovar</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>27253194</td>
                                                    <td>22</td>
                                                    <td>0426037352</td>
                                                    <td>juanvillans16@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Cambiar de sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Douglas Javier</td>
                                                    <td>Villasmil Tovar</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>27253194</td>
                                                    <td>22</td>
                                                    <td>0426037352</td>
                                                    <td>juanvillans16@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Cambiar de sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Dalexer noseque</td>
                                                    <td>Colina Ramirez</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>29342184</td>
                                                    <td>20</td>
                                                    <td>0212438719</td>
                                                    <td>dalexercivirigua@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Dalexer noseque</td>
                                                    <td>Colina Ramirez</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>29342184</td>
                                                    <td>20</td>
                                                    <td>0212438719</td>
                                                    <td>dalexercivirigua@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Dalexer noseque</td>
                                                    <td>Colina Ramirez</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>29342184</td>
                                                    <td>20</td>
                                                    <td>0212438719</td>
                                                    <td>dalexercivirigua@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Diego</td>
                                                    <td>Donquis Gonzales</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>30101010</td>
                                                    <td>15</td>
                                                    <td>0269356969</td>
                                                    <td>mondonquis@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo fas fa-person-walking-dashed-line-arrow-right"></i>

                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </article>

                                <article class="each_section" data-section="1B">
                                    <div class="position-absolute Pl-4 pb-0">
                                        <div class="mx-auto">
                                            <h4 class="h4">Sección 1B </h4>
                                            <p>matricula: <b class="n_students" data-section="1B">3</b> </p>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table data-year="1" data-section="1B"   data-section="1B" class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th data-priority="1">Nombres </th>
                                                    <th>Apellidos</th>
                                                    <th>Foto</th>
                                                    <th>Cedula</th>
                                                    <th>Edad</th>
                                                    <th>Tel del representante</th>
                                                    <th>correo</th>
                                                    <th data-priority="2">acción</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Francisco</td>
                                                    <td>Villasmil Tovar</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>27253194</td>
                                                    <td>22</td>
                                                    <td>0426037352</td>
                                                    <td>juanvillans16@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Cambiar de sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Dalexer noseque</td>
                                                    <td>Colina Ramirez</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>29342184</td>
                                                    <td>20</td>
                                                    <td>0212438719</td>
                                                    <td>dalexercivirigua@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Diego</td>
                                                    <td>Donquis Gonzales</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>30101010</td>
                                                    <td>15</td>
                                                    <td>0269356969</td>
                                                    <td>mondonquis@gmail.com</td>
                                                    <td class="td_action"><i data-year="1" title="Mover a otra sección" class="btn_change_solo fas fa-person-walking-dashed-line-arrow-right"></i>

                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </article>
                            </div>
                        </article>


                        <article class="card each_year" data-year="2">
                            <button class="button_year btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="P-3" id="headingTwo">
                                    <h3 class="mb-0 color-primary">
                                        2 - Segundo año
                                    </h3>
                                    <i class=></i>
                                    <p class="color-primary mb-0">Nro de secciones: <b class="nSections" data-year="2">1</b></p>
                                    <p class="color-primary mb-0">Cantidad total de estudiantes: <b class="nStudents" data-year="2">300</b></p>
                                </div>
                            </button>

                            <div id="collapseTwo" data-year='2' class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                                <div class="form-group">
                                    <!-- task for Donquis: add the total number of sections in this year -->
                                    <button data-year='2' data-nsections="1" for='new_subject_name' class="mx-auto d-block d-none add_btn">+ Crear sección</button>
                                </div>
                                <article class="each_section" data-section="2A">
                                    <div class="position-absolute Pl-4 pb-0">
                                        <div class="mx-auto">
                                            <h4 class="h4">Sección 2A
                                            </h4>
                                            <p>matricula: <b class="n_students" data-section="2A">30</b> </p>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table data-year="2" data-section="2A"  class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th data-priority="1">Nombres </th>
                                                    <th>Apellidos</th>
                                                    <th>Foto</th>
                                                    <th>Cedula</th>
                                                    <th>Edad</th>
                                                    <th>Tel del representante</th>
                                                    <th>correo</th>
                                                    <th data-priority="2">acción</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Francisco</td>
                                                    <td>Villasmil Tovar</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>27253194</td>
                                                    <td>22</td>
                                                    <td>0426037352</td>
                                                    <td>juanvillans16@gmail.com</td>
                                                    <td class="td_action"><i data-year="2" title="Cambiar de sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Dalexer noseque</td>
                                                    <td>Colina Ramirez</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>29342184</td>
                                                    <td>20</td>
                                                    <td>0212438719</td>
                                                    <td>dalexercivirigua@gmail.com</td>
                                                    <td class="td_action"><i data-year="2" title="Mover a otra sección" class="btn_change_solo p-relative fas fa-person-walking-dashed-line-arrow-right">

                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>Juan Diego</td>
                                                    <td>Donquis Gonzales</td>
                                                    <td><a href="#">ver foto</a></td>
                                                    <td>30101010</td>
                                                    <td>15</td>
                                                    <td>0269356969</td>
                                                    <td>mondonquis@gmail.com</td>
                                                    <td class="td_action"><i data-year="2" title="Mover a otra sección" class="btn_change_solo fas fa-person-walking-dashed-line-arrow-right"></i>

                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </article>

                            </div>
                        </article>
                    </div>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


    </div>
    <?php require_once "../../sections/_footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->





    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <!-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
    <!-- <script src="../../plugins/jszip/jszip.min.js"></script> -->
    <!-- Toastr -->
    <script src="../../plugins/toastr/toastr.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            $("table.display").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                'paging': false,
                "ordering": true,
                'columnDefs': [{
                    'orderable': false, // set orderable false for selected columns
                    'targets': [0, 1], // column index (start from 0)
                    'content': " ",
                }]
            })
        });
    </script>
    <script type="module" src="../../js/modules/secciones.js"></script>
</body>

</html>