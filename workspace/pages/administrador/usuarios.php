<style>

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
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="../../css/general_plantilla.css"> -->
    <link rel="stylesheet" href="../../css/usuarios.css">

    <title>Usuarios</title>
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

                            <h1 class="m-0">Usuarios</h1>

                            <div class="row mt-2">

                                <!-- /.col -->
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <button for='new_subject_name' class="add_btn" data-toggle="modal" id="btn_open_form" data-target="#modal-lg">+ Nuevo Usuario</button>
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
                    <!-- modal -->
                    <div class="modal fade" id="modal-lg">
                        <div class="modal-dialog d-flex flex-column flex-md-row">
                            <div class="permisos_div modal-content bg-1 ">
                                <div class="modal-header pl-0">
                                    <h3 class="modal-title">Permisos</h3>

                                </div>
                                <div class="modal-body p-0 pt-5">

                                    <span class="card_form p-0 m-0 mb-5">
                                        <span class="m-0 color-4" for="roles">Rol:</span>
                                        <select name="roles" id="roles">
                                            <option id="option_adm" value="Administrador">Administrador</option>
                                            <option id="option_pro" value="Docente">Docente</option>
                                            <option id="option_per" value="Docente-administrador" class="">Docente administrador</option>
                                            <option id="option_sel" value="seleccione" class="d-none">Seleccione un rol</option>
                                        </select>

                                    </span>
                                    <div class="d-md-flex justify-content-between">

                                        <section id="Administrador">
                                            <h4>Administrador</h4>
                                            <label class="color-4"><input type="checkbox" checked name="">Adm. usuarios</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Admi. periodo Escolar</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Admi. Inscripciones</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Adm. materias</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Admi. secciones</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Admi. plan de evaluación</label>
                                            <label class="color-4"><input type="checkbox" checked name="">Admi. plan de evaluación</label>
                                        </section>
                                        <section id="Docente">
                                            <h4>Docente</h4>
                                            <label><input type="checkbox" name="">Cargar notas</label>
                                            <label><input type="checkbox" name="">Crear plan de evaluación</label>
                                            <label><input type="checkbox" name="">Asistencia</label>
                                        </section>
                                    </div>
                                </div>


                            </div>

                            <div class="modal-content card_form ">
                                <div class="modal-header p-0">
                                    <h4 class="modal-title mb-0">Crear un nuevo usuario</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body pt-5 px-0">
                                    <input type="hidden" name="id" id="id_user">

                                    <div class="d-grid">
                                        <span>
                                            <input type="text" value="Pepito" id="name" name="name">
                                            <label for="names">Nombres: </label>
                                        </span>
                                        <span>
                                            <input type="text" id="last_name" name="lastname">
                                            <label for="apellidos">Apellidos: </label>
                                        </span>
                                    </div>
                                    <div class="d-grid">
                                        <span>
                                            <input type="date" id="date_birth" name="date">
                                            <label for="date_birth">Fecha de nacimiento:</label>
                                        </span>
                                        <span>
                                            <input type="number" data-type="CI" disabled id="DNI" pattern="[0-9]{8}" title="Debe escribir una letra 'V' seguida de 8 números" name="DNI">
                                            <label for="DNI">CI: </label>
                                        </span>

                                    </div>
                                    <div class="d-grid">
                                        <span>
                                            <input type="email" name="email" id="email">
                                            <label for="email">Correo: </label>
                                        </span>
                                        <span>
                                            <input type="tel" id="tel" name="phone" placeholder="">
                                            <label for="tel">Telefono: </label>
                                        </span>
                                    </div>




                                    <div class="d-grid">
                                        <span>
                                            <input type="text" id="state" name="state">
                                            <label for="state">Estado: </label>
                                        </span>
                                        <span>
                                            <input type="text" id="city" name="city">
                                            <label for="city">Ciudad: </label>
                                        </span>

                                    </div>

                                    <label for="address">Dirección especifica</label>
                                    <textarea name="address" id="address" cols="30" rows="5" style="max-height: 100px;"></textarea>
                                </div>

                                <div class="modal-footer justify-content-between px-0">
                                    <button type="button" class="btn btn-default btn_cancelar" data-dismiss="modal">Cancelar</button>
                                    <span class="parent_btn_submit d-block m-0"><button type="submit" id="b_form" name="new_request" class="btn_submit mt-0">Guardar</button></span>

                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table-head-fixed table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th data-priority="1">Nombres</th>
                                                <th>Apellidos</th>
                                                <th>CI</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Natalicio</th>
                                                <th>Estado</th>
                                                <th>Ciudad</th>
                                                <th>Dirección</th>
                                                <th data-priority="3">Rol</th>
                                                <th data-priority="2">acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr data-id="1">
                                                <td class="">Carmen florencia</td>
                                                <td class="">Hernandez Ramirez</td>
                                                <td class="">27254194</td>
                                                <td class="">carmenMorio@gmailc.om</td>
                                                <td class="">Profesor</td>
                                                <td class="action"><i class="fas fa-edit" title="Editar"></i> <i class="fa-trash-can far" title="Eliminar"></i></td>
                                            </tr> -->

                                            <!-- <tr data-id="2  ">
                                                <td class="">Etna maria</td>
                                                <td class="">Juliao gonzalex</td>
                                                <td class="">2254194</td>
                                                <td class="">carmenMorio@gmailc.om</td>
                                                <td class="">Profesor</td>
                                                <td class="action"><i class="fas fa-edit" title="Editar"></i> <i class="fa-trash-can far" title="Eliminar"></i></td>
                                            </tr> -->

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
    <script src="../../../js/functions/form_functions.js"></script>
    <script src="../../js/modules/usuarios.js"></script>

    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script> 

    <script>

    </script>

</body>

</html>