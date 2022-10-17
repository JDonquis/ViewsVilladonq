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

    <link rel="stylesheet" href="../../css/notas.css">
    <title>Notas</title>
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
                        <div class="col-sm-8">
                            <!-- SELECT2 EXAMPLE -->

                            <h1 class="m-0">Notas</h1>

                            <div class="row mt-2">
                                <div class="col-12 col-sm-6">

                                    <div class="form-group">

                                        <label>Materia</label>
                                        <select class="form-control select2 select2-primary" data-dropdown-css-class="select2-primary" style="width: 100%;">
                                            <option selected="selected">Biologia</option>
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

                                        <label>sección</label>
                                        <select class="form-control" data-dropdown-css-class="select2-primary" style="width: 100%;">
                                            <option selected="selected">5to A</option>
                                            <option>2do B</option>
                                            <option>2do C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <form class="form-group">
                                        <label>Lapsos</label>

                                        <div class="d-flex">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                                <label for="customRadio1" class="custom-control-label">1</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-4">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                                                <label for="customRadio2" class="custom-control-label">2</label>
                                            </div>

                                        </div>


                                    </form>
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

                    <form class="row  row_table_plan">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body table-responsive p-0" style="max-height: 500px;">
                                    <table class="asist_table table table-head-fixed text-nowrap table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th_estudiante"> Estudiantes </th>
                                                <th>
                                                    Ev. 1
                                                    <div class="ev_details">
                                                        <p class="tema">Presente simple</p>
                                                        <p class="estrategia">Examen escrito</p>
                                                        <div class="calification_info">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    Ev. 2
                                                    <div class="ev_details">
                                                        <p class="tema">Verbo To Be</p>
                                                        <p class="estrategia">Exposición</p>
                                                        <div class="calification_info">
                                                        </div>

                                                    </div>
                                                </th>
                                                <th>
                                                    Ev. 3
                                                    <div class="ev_details">
                                                        <p class="tema">Pasado perfecto</p>
                                                        <p class="estrategia">Dialogo</p>
                                                        <div class="calification_info">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    Ev. 4
                                                    <div class="ev_details">
                                                        <p class="tema">Tag questions</p>
                                                        <p class="estrategia">Cuestionario</p>
                                                        <div class="calification_info">
                                                        </div>
                                                    </div>
                                                </th>

                                                <th class="th_total">
                                                    Total
                                                    <div class="ev_details">

                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="tr1">
                                                <td class=" td_estudiante">
                                                    Juan Villasmil
                                                </td>
                                                <td class="p-0 each_cell">
                                                    <input type="number" value="01"><span class="d-none">01</span>
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="10"> <span class="d-none">10</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="13"> <span class="d-none">13</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="12"> <span class="d-none">12</span></td>
                                                <td class="total"><input type="number" name="" value="09" disabled>
                                                    <span class="d-none">09 </span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Dalexer Colina
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="14"> <span class="d-none">14</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="15"> <span class="d-none">15</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="16"><span class="d-none">16</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17.5"> <span class="d-none">17.5</span></td>
                                                <td class="total "><input type="number" name="" value="16" disabled>
                                                    <span class="d-none">16</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

                                            </tr>
                                            <tr id="">
                                                <td class=" td_estudiante">
                                                    Juan Donquis
                                                </td>
                                                <td class="p-0 each_cell"><input type="number" value="19"> <span class="d-none">19</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="18"><span class="d-none">18</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="09"> <span class="d-none">09</span></td>
                                                <td class="p-0 each_cell"><input type="number" value="17"> <span class="d-none">17</span></td>
                                                <td class="total "><input type="number" name="" value="18" disabled>
                                                    <span class="d-none">18</span>
                                                </td>

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
        // dataTables plugin
        $.fn.dataTable.ext.order['dom-text'] = function(settings, col) {
            return this.api().column(col, {
                order: 'index'
            }).nodes().map((td, i) => $('input', td).val());
        };

        // set a value to these constants
        const n_evaluaciones = 4
        const n_estudiantes = 3

        $(function() {
            let type_order = {
                orderDataType: 'dom-text',
                type: 'string'
            }
            let n_order_columns = [null]
            for (let n = 0; n < n_evaluaciones + 1; n++) {
                n_order_columns.push(type_order)
            }
            $("table").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                'paging': false,
                "columns": n_order_columns,
                "ordering": true,
                "buttons": [{
                    extend: 'pdfHtml5',
                    exportOptions: {
                        format: {
                            header: function(data) {
                                return $('<div></div>')
                                return $('.data')
                                    .find('.ev_details')
                                    .remove()
                                    .end()
                                    .text()
                            }
                        }
                    }
                }, "excel", "print", "colvis"],


            }).buttons().container().prependTo('.dataTables_filter');

        });
        setTimeout(() => {

            let input_search = document.querySelector(`.dataTables_filter input[type='search']`)
            input_search.placeholder = 'Buscar estudiante'



            // creating a btn_submit for then show it when the user change the value of the grades
            const btn_submit = document.createElement('span')
            btn_submit.classList.add('parent_btn_submit')
            btn_submit.innerHTML = `<input title='Ctrl + s' type="submit" name="save-plan" value="GUARDAR" class="btn_submit mt-0" id="save-form"></span>`


            let all_totals = document.querySelectorAll(".total input")
            let all_inputs = document.querySelectorAll(".each_cell input")
            let all_tr = document.querySelectorAll('tbody tr')
            let all_calification_info = document.querySelectorAll(".calification_info")
            const total_th_info = document.querySelector(".th_total .ev_details")
            let btn_visible = false;

            all_tr.forEach((each_tr, tr_index) => {

                each_tr.querySelectorAll('.each_cell input').forEach((each_input, input_index) => {

                    each_input.oninput = () => {
                        all_totals[tr_index].value = [...each_tr.querySelectorAll('.each_cell input')].map(v => +v.value).reduce((acc, actual) => acc + actual) / n_evaluaciones;
                        reproveInRed()
                        gradesEvalInfo(input_index)
                        if (!btn_visible) {
                            dataTableHeader.appendChild(btn_submit)
                            btn_visible = true
                        }
                        allTotalInfo
                    }
                })
                each_tr[tr_index]
            })

            // 
            function reproveInRed(params) {
                all_totals.forEach(each_total => {
                    each_total.value < 10 ? each_total.classList.add('text-danger') : each_total.classList.remove('text-danger')


                })
            }

            function gradesEvalInfo(index) {
                // calculate in the current col changed
                let grades_col = [...all_tr].map(trn => +trn.querySelectorAll('input')[index].value);
                let n_failed = grades_col.filter(v => v < 10).length
                let n_failed_porcent = getPercent(n_failed)
                let n_pass = grades_col.filter(v => v >= 10).length
                let n_pass_porcent = getPercent(n_pass)

                //calculate the total colums
                //insert in DOM 
                all_calification_info[index].innerHTML = `<p class="reprobados text-danger">R: ${n_failed} (${n_failed_porcent}%) </p>
                                        <p class="aprobados text-success">A: ${n_pass} (${n_pass_porcent}%)</p>`

            }

            for (let i_ev = 0; i_ev < n_evaluaciones; i_ev++) {
                gradesEvalInfo(i_ev)

            }

            function allTotalInfo() {
                let totals_col = [...all_totals].map(tv => tv.value)
                let totals_failed = totals_col.filter(v => v < 10).length
                let totals_failed_porcent = getPercent(totals_failed)
                let totals_pass = totals_col.filter(v => v >= 10).length
                let totals_pass_porcent = getPercent(totals_pass)
                total_th_info.innerHTML = `<p class="reprobados text-danger">R: ${totals_failed} (${totals_failed_porcent}%) </p>
                                        <p class="aprobados text-success">A: ${totals_pass} (${totals_pass_porcent}%)</p>`
            }
            allTotalInfo()

            function getPercent(num) {
                let r = ((num / n_estudiantes) * 100)
                return r % 1 == 0 ? Math.trunc(r) : r.toFixed(1)
            }
        }, 90);
    </script>

</body>

</html>