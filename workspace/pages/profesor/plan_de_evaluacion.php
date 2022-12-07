<style>
    .disable_edit td,
    .disable_edit textarea {
        background: #fafafa;
    }

    .disable_edit .th_eliminar,
    .disable_edit .borrar,
    .disable_edit .history_arrows,
    .disable_edit .btn_submit,
    .disable_edit tfoot {
        display: none;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">
    <title>Plan de evaluación</title>
</head>

<body>


    <div class="wrapper">
        <?php require_once "../../../includes/_loader.php"; ?>
        <!-- Navbar -->
        <?php require_once "../../sections/_nav-bar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once "../../sections/_prof-menu.php"; ?>

        <input type="hidden" id="input-id" value="1">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0">Plan de evaluación</h1>

                            <form class="row mt-2" id="lesson">
                                <div class="col-12 col-sm-6">

                                    <div class="form-group">

                                        <label>Materia</label>
                                        <select class="form-control " id="matters_select" name="matter" style="width: 100%;">
                                            <option selected="selected">Seleccionar la materia</option>
                                            <option>Biologia</option>
                                            <option>Matematica</option>
                                            <option>Física</option>
                                            <option>Escritura y compresión lectora</option>
                                            <option>ect ect</option>

                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <label>Año escolar</label>
                                        <select class="form-control" id="years_select" name="year" style="width: 100%;">
                                            <option selected="selected">Seleccionar el año</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Momento</label>

                                        <div class="d-flex">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="1" checked>
                                                <label for="customRadio1" class="custom-control-label">1</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-4">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="2">
                                                <label for="customRadio2" class="custom-control-label">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio" value="3">
                                                <label for="customRadio3" class="custom-control-label">3</label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- /.col -->
                            </form>

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="col-12">
                        <div class="callout callout-danger">
                            <h5 class="h6">Este plan de evaluación no fue aceptado </h5>

                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p><b><i class="fa fa-user mt-2" aria-hidden="true"></i> Jordar Peterson</b> <time> 10/11/2022</time> </p>

                        </div>

                        <form class="row row_table_plan disable_edit" id="plan-form">
                            <div id="" class="card parent_pdf p-relative">
                                <div class="card-header">
                                    <div class="form-group float-left mt-2 move_hist_btns">
                                        <button type="button" onclick="goBack()" title="revertir cambio ( ctrl + z )" class=" disabled fa-solid history_arrows past fa-arrow-rotate-left"></button>
                                        <button type="button" onclick="goNext()" title="volver al cambio ( ctrl + y )" class="fa-solid history_arrows future fa-arrow-rotate-right disabled ml-2 mr-4"></button>
                                    </div>
                                    <h2 class="h3 d-inline">1-1 Biología </h2>
                                    <!-- the edit_button only must be in the DOM when the status of the plan is rejected -->
                                    <button type="button" id="edit_button" class=" ml-2 py-1 px-2"><i class="fas fa-pencil"></i> editar plan</button>
                                    <div class="card-tools ">
                                        <span class="parent_btn_submit">
                                            <input title='Ctrl + s' type="submit" name="save-plan" value="ENVIAR" class="btn_submit mt-0" id="save-form"></span>
                                    </div>
                                    <!-- FOR DONQUIS: after save the data you must print the "En revisión" message and add the class "disable_edit" to the "form.row_table_plan" element to prevent the user from modifying and submit the data -->
                                    <!-- <div class="ribbon-wrapper ribbon-lg d-none">
                                        <div class="ribbon bg-gray text-bold color-text">
                                            En revisión
                                        </div>
                                    </div> -->
                                    <!-- DONQUIS: If the request was accepted then show:  -->
                                    <!-- <div class="ribbon-wrapper ribbon-lg ">
                                        <div class="ribbon bg-1 text-bold color-4">
                                            APROVADO
                                        </div>
                                    </div> -->
                                    <!-- DONQUIS: If the request was rejected then show:  -->
                                    <div class="ribbon-wrapper ribbon-lg ">
                                        <div class="ribbon text-bold bg-red text-white">
                                            Rechazado
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="max-height: 700px;">
                                    <table class="asist_table table table-head-fixed text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th_unidad">#</th>
                                                <th style="min-width: 150px;">Tema</th>
                                                <th style="min-width: 200px;">Contenido</th>
                                                <th>Estrategia</th>
                                                <th class="th_valor">Valor</th>
                                                <th class="th_eliminar">Eliminar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-unity="1">
                                                <td class="text-bold td_unidad">
                                                    1
                                                </td>
                                                <td class="p-0 each_cell"><textarea disabled name="tema1">Nomenclatura y orden que se le da a los seres vivos</textarea></td>
                                                <td class="p-0 each_cell"><textarea name="contenido1">taxonomía, orden de la taxonomía, clasificación de la taxonomia, orden, especie, genero, familia, clase , phynum y reinos.
De los reinos: bla bla bla bla extera excetara excetera y todo lo que tenga que ver con eso mismo</textarea>
                                                </td>
                                                <td class="p-0 each_cell"><textarea name="estrategia1">mapa mixto</textarea></td>
                                                <td class="td_valor p-0 each_cell"><textarea name="valor1" id="">18+2</textarea>
                                                </td>
                                                <td class="borrar text-center"><i class="borrar_btn  fa-solid fa-xmark" id="br1"></i></td>

                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="btn_more" title="Agregar nueva  (ctrl + enter)">
                                                    <i class="fa-solid fa-plus"></i> Nueva unidad
                                                </td>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <input type="hidden" name="insert" value="1">
                            <input type="hidden" name="teacher_id" value="1">
                            <input type="hidden" name="name_teacher" value="1">
                            <input type="hidden" name="last_name_teacher" value="1">
                            <input type="hidden" name="unidades" value="1" id="N_uni">
                        </form>
                    </div>
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
    <!-- /.control-sidebar -->
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>



    <script src="../../js/modules/evaluation_plan.js" type="module"></script>
</body>

</html>