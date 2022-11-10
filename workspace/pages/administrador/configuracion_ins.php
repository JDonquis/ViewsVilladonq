<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Configuración de inscripción</title>
    <!-- daterange picker -->
    <!-- <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css"> -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/general_plantilla.css">

</head>

<body class="hold-transition sidebar-mini">
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
                        <div class="col-sm-6">
                            <h1>Configuración de la inscripción</h1>
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
                    <h2 class="h3">Periodo de inscripción nuevo año escolar 2023</h2>
                    <div class="form-group">
                 
                    <form class="d-md-flex " id="date-form">
                        <!-- <label> Inicio
                            <input class="d-block" type="date">
                        </label>
                        <label> Cierre
                            <input class="d-block" type="date">
                        </label> -->

                        <div class="form-group" >
                            <label>Inicio:
                                <input min="" max="" class="start form-control" type="date" name="start">
                            </label>
                        </div>
                        <div class="form-group ml-md-3">
                            <label>Fin:
                                <input disabled="true" min="" max="" class="end form-control" type="date" name="end">
                            </label>
                        </div>
                        <span class="parent_btn_submit ">
                        <input title='Ctrl + s' type="submit" name="save-date" value="Guardar fecha" class="btn_submit mt-4 ml-3 d-none p-2" id="date_btn"></span>
                    </form>


<!-- start cupos *********************************************************************************************************************************************************************************************** -->
<form class="row">
    <div class="col-md-8">
        <div class="card">

              <div class="card-header">
                <h2 class="h4 d-inline">Cupos </h2>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class=" table table-head-fixed text-nowrap table-bordered cupos">
                  <thead>
                    <tr>
                      <th style="">Año escolar</th>
                      <th>Asignados</th>
                      <th class="color-2">Aceptados</th>
                      <th style="" class="text-right">Restantes</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>1</td>
                      <td class="position-relative ">  
                        <!-- min == numero de aceptados -->
                      <input type="number" min="30" class="asignados w-100 h-100 position-absolute top-0 left-0 pl-3 pb-3"  name="asignado1" value="100">
                      </td>
                      <td colspan="2">
                        <div class="progress progress-xs">
                            <!-- the style=width: getPercent(nro_asignados, nro_aceptados) -->
                          <div class="progress-bar bg-2" style="width: 85%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="aceptados mt-2 color-2 font-weight-bold">30</span>
                        <input  min="0" class="restantes r1 border text-right rounded mt-1 col-3 input-sm" type="number" name="restantes1" value="15" >
                        </div>
                      </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td class="position-relative ">
                          
                        <input type="number" min="1" class="asignados w-100 h-100 position-absolute top-0 left-0 pl-3 pb-3"  name="asignado2" value="7">
                        </td>
                        <td colspan="2">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-2" style="width: 75%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="aceptados mt-2 color-2 font-weight-bold">1</span>
                        <input  min="0" class="restantes r2 border text-right rounded mt-1 col-3 input-sm" type="number" name="restantes2" value="15" >
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="position-relative ">
                          
                        <input type="number" min="0" class="asignados w-100 h-100 position-absolute top-0 left-0 pl-3 pb-3"  name="asignado3" value="9">
                        </td>
                        <td colspan="2">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-2" style="width: 5%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="aceptados mt-2 color-2 font-weight-bold">30</span>
                        <input  min="0" class="restantes r3 border text-right rounded mt-1 col-3 input-sm" type="number" name="restantes3" value="15" >
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="position-relative ">
                          
                        <input type="number" min="0" class="asignados w-100 h-100 position-absolute top-0 left-0 pl-3 pb-3"  name="asignado4" value="2">
                        </td>
                        <td colspan="2">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-2" style="width: 55%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="aceptados mt-2 color-2 font-weight-bold">30</span>
                        <input  min="0" class="restantes r4 border text-right rounded mt-1 col-3 input-sm" type="number" name="restantes4" value="15" >
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="position-relative ">
                          
                        <input type="number" min="0" class="asignados w-100 h-100 position-absolute top-0 left-0 pl-3 pb-3"  name="asignado5" value="6">
                        </td>
                        <td colspan="2">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-2" style="width: 15%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="aceptados mt-2 color-2 font-weight-bold">30</span>
                        <input  min="0" class="restantes r5 border text-right rounded mt-1 col-3 input-sm" type="number" name="restantes5" value="15" >
                        </div>
                        </td>
                    </tr>
                   
                  </tbody>

                </table>
                <span class="parent_btn_submit">
                <input title='Ctrl + s' type="submit" name="save-plan" value="Guardar cupos" class="btn_submit d-none mt-2" id="cupos_btn"></span>
                                        
              </div>
              <!-- /.card-body -->
        </div>
    </div>
</form>
            


<!--start docs *****************************************************************************************************************************************************************************************+ -->
             <form class="row  row_table_plan" id="docs-form">
                        <div class="col-md-10">
                            <div class="card parent_pdf">
                                <div class="card-header">
                                    <div class="form-group float-left mt-2 move_hist_btns">
                                        <button type="button" onclick="goBack()" title="revertir cambio ( ctrl + z )"
                                            class=" disabled fa-solid history_arrows past fa-arrow-rotate-left"></button>
                                        <button type="button" onclick="goNext()" title="volver al cambio ( ctrl + y )"
                                            class="fa-solid history_arrows future fa-arrow-rotate-right disabled ml-2 mr-4"></button>
                                    </div>
                                    <h2 class="h4 d-inline">Documentos </h2>
                                    <div class="card-tools ">
                                        <span class="parent_btn_submit">
                                        <input title='Ctrl + s' type="submit" name="save-plan" value="GUARDAR" class="btn_submit d-none mt-0" id="docs_btn"></span>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="max-height: 700px;">
                                    <table id="table_docs" class=" table table-head-fixed text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th_unidad"> # </th>
                                                <th>Nombre del documento</th>
                                                <th>Solicitado</th>
                                                <th>Obligatorio</th>
                                                <th class="th_valor">Eliminar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="tr1">
                                                <td class="text-bold td_unidad">
                                                    1
                                                </td>
                                                <td class="p-0 each_cell"><textarea
                                                        name="tema1">Constancia de que no ha matado a nadie</textarea></td>
                                                <td class="text-center align-middle each_cell">
                                                    <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                    </div>
                                                </td>

                                                <td class="text-center align-middle each_cell">
                                                    <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                        <label class="custom-control-label" for="customSwitch2"></label>
                                                    </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="borrar text-center"><i class=" fa-solid fa-xmark"
                                                        id="br1"></i></td>

                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="btn_more" title="Agregar nueva  (ctrl + enter)">
                                                    <i class="fa-solid fa-plus"></i> Nuevo documento
                                                </td>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <input type="hidden" name="insert" value="1">
                        <input type="hidden" name="teacher_id" value="1">
                        <input type="hidden" name="name_teacher" value="1">
                        <input type="hidden" name="last_name_teacher" value="1">
                        <input type="hidden" name="unidades" value="1" id="N_uni">
                    </form>
                
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
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
    <script>
            //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

        //         //Datemask dd/mm/yyyy
        // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        // //Datemask2 mm/dd/yyyy
        // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        // //Money Euro
        // $('[data-mask]').inputmask()

        //Date picker

    </script>


    <script>
        // start config date for inscribe *********************************************************************+
        const submit_date = document.querySelector('#date_btn')
        const inp_start = document.querySelector('.start')
        const inp_end = document.querySelector('.end')

        document.querySelector("#date-form").onchange = (e) => {
            if (e.target == inp_start) {
                inp_end.min = inp_start.value
                inp_end.disabled = false

                if (inp_start.value >= inp_end.value) {
                    inp_end.value = inp_start.value
                }
            }

            submit_date.classList.remove('d-none')
            submit_date.classList.add('opacity_1')

        }
        if (inp_start.value.length > 0  ) {
            inp_start.disabled = true
            inp_end.disabled = false
        }
        // inp_start.onchange = (e) => {


        // }



        // start   events on cupos table ***************************************************************
        const submit_cupos = document.querySelector('#cupos_btn')
        const error_message = document.querySelector('.limit_error')
        document.querySelector('table.cupos').addEventListener('input', (e) => {
            const input = e.target
            const tr = input.closest('tr')
            const inp_restante = tr.querySelector('.restantes')
            const inp_asignados = tr.querySelector('.asignados')
            const aceptados = tr.querySelector('.aceptados')
            const progress = tr.querySelector('.progress-bar')
            const asig_val = inp_asignados.value
            const acep_val = +aceptados.textContent
            const rest_val = inp_restante.value

            if (input.classList.contains('asignados')) {
                inp_restante.value = asig_val - acep_val    
            }
            if (input.classList.contains('restantes')){
                inp_asignados.value = acep_val + +rest_val
            }

            progress.style.width = `${getPercent(asig_val, acep_val)}%`
            submit_cupos.classList.remove('d-none')
            submit_cupos.classList.add('opacity_1')


        })

        function getPercent(total, amount){
            return ((amount / total) * 100)
        }


        /// ***** star documents table config *************************************************************************
        const submit_docs = document.querySelector('#docs_btn')
        let table_docs = document.querySelector('#table_docs')
        let all_row = table_docs.querySelectorAll('tbody tr')
        let tbody = table_docs.querySelector("tbody")
        const tfoot = table_docs.querySelector("tfoot")
        let n_unidades = all_row.length;
        $("#N_uni")[0].value = n_unidades;
        let textareastable_docs = table_docs.querySelectorAll("tbody textarea")
        const move_hist_btns = document.querySelector(".move_hist_btns")
        const past_btn = document.querySelector(".past")
        const future_btn = document.querySelector(".future")
        const form = document.querySelector(".row_table_plan")
        let checkboxs = table_docs.querySelectorAll("input[type=checkbox]")
        let allow = true;

        table_docs.onchange = () => {
            getData()
        }

        table_docs.oninput = () => {
            submit_docs.classList.remove('d-none')
            submit_docs.classList.add('opacity_1')
        }

        function textareasFuctions(firts_time = false) {
            textareasTable = document.querySelectorAll("tbody textarea")
            textareasTable.forEach(t => {
                if (firts_time) adjustTextareaHight(t)
                t.oninput = () => {
                    adjustTextareaHight(t)
                }
                t.onchange = () => {
                    if (allow) {
                        allow = true
                    }
                }
            })
        }
        function adjustTextareaHight(t) {
            t.style.height = 'auto';
            let scrollH = t.scrollHeight;
            t.style.height = `calc(${scrollH}px + 12px )`;
            allow = true
        }
        textareasFuctions(true)


        function addRow(get_data = true) {
            let tr = document.createElement('tr')
            let new_n = n_unidades + 1
            tr.id = `tr${new_n}`
            const tds = `
            <td class="text-bold td_unidad">${new_n}</td>
            <td class="each_cell"><textarea name="tema${new_n}" id="">
                </textarea>
            </td>
            <td class="text-center align-middle each_cell">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="solicitado${new_n}">
                        <label class="custom-control-label" for="solicitado${new_n}"></label>
                    </div>
                </div>
            </td>

            <td class="text-center align-middle each_cell">
                <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="requerido${new_n}">
                    <label class="custom-control-label" for="requerido${new_n}"></label>
                </div>
                </div>
            </td>
            <td class="borrar text-center"><i class="fa-solid fa-xmark" id="br${new_n}"></i></td>`

            tr.innerHTML = tds
            tbody.append(tr)
            $(tr).slideDown()
            let new_tema = document.getElementsByName(`tema${new_n}`)[0]
            new_tema.focus()
            textareasFuctions()
            focusWithClick()
            n_unidades++
            deleteRow()
            all_row = document.querySelectorAll('tbody tr')
            checkboxs = document.querySelectorAll('input[type=checkbox]')
            allow = false;
            if (get_data) getData()
            $("#N_uni")[0].value = n_unidades;

        }

           // focus textarea when click in its td
        function focusWithClick() {
            document.querySelectorAll(".each_cell").forEach(td => {
                td.onclick = () => {
                    const texta = td.querySelector('textarea')
                    if (texta) {
                        const texta_len = texta.value.length
                        texta.setSelectionRange(texta_len, texta_len)
                        texta.focus()

                    }
                }
            })
        }
        focusWithClick()

        // delete row
        function deleteRow() {
            let all_borrar_btn = document.querySelectorAll(".borrar i")

            all_borrar_btn.forEach((btn_borrar) => {

                btn_borrar.onclick = () => {
                    let id_tr = btn_borrar.id
                    let n_id = id_tr.match(/[\d]/g).join('')
                    let row = document.querySelector(`#tr${n_id}`)
                    row.classList.add('removing')
                    n_id = +n_id
                    setTimeout(() => {
                        row.remove()
                        for (let j = n_id; j < n_unidades; j++) {
                            let edit_row = document.querySelector(`#tr${j + 1}`)
                            edit_row.id = `tr${j}`
                            let edit_b = document.querySelector(`#br${j + 1}`)
                            edit_b.id = `br${j}`
                            edit_row.children[0].textContent = j;
                        }
                        n_unidades--
                        getData()
                    }, 200);
                }
            })
            $("#N_uni")[0].value = n_unidades;
        }
        deleteRow()
        // save data for then go back or next

        let history = []
        let now = '';
        function getData() {
            let new_data = { 'n_unidades': n_unidades, 'texta_values': [...textareasTable, ].map(t => t.value), 'checkbox_values': [...checkboxs].map(t => t.checked)  }
            if (now < history.length - 1) {
                history.splice(now + 1, history.length - (now + 1), new_data);
                future_btn.classList.add('disabled')
            }
            else {
                history.push(new_data)
            }
            if (now > 19) history.shift()
            now = history.length - 1
            past_btn.classList.remove('disabled')
            if (now < 1) {
                past_btn.classList.add('disabled')

            } 
            console.log(history)

        }
        getData()

        const goBack = () => {
            if (now > 0) {
                moveHist(history[--now])

                future_btn.classList.remove('disabled')
            }
            if (now == 0) {
                past_btn.classList.add('disabled')
                submit_date.classList.add('d-none')
                submit_docs.classList.remove('opacity_1')

            }
        }

        const goNext = () => {
            if (now < history.length - 1) {
                moveHist(history[++now])
                past_btn.classList.remove('disabled')
            }
            if (now == history.length - 1) future_btn.classList.add('disabled')
        }

        function moveHist(arr) {
            tbody.replaceChildren()
            n_unidades = 0
            for (let i = 0; i < arr['n_unidades']; i++) {
                addRow(false);
            }
            textareasTable.forEach((t, i) => t.value = arr['texta_values'][i])
            checkboxs.forEach((che, i) => che.checked = arr['checkbox_values'][i])
            textareasFuctions(true)
        }

        document.querySelector(".btn_more").onclick = () => addRow()

        //  shortcuts
        document.addEventListener('keydown', e => {
            // to add new row ( new unite )
            if (e.key.toLowerCase() === 'enter' && e.ctrlKey) {
                e.preventDefault()
                addRow()
            }
            // to go back
            if (e.key.toLowerCase() === 'z' && e.ctrlKey) {
                e.preventDefault()
                goBack()
            }
            // to go next
            if (e.key.toLowerCase() === 'y' && e.ctrlKey) {
                e.preventDefault()
                goNext()
            }
            // save
            if (e.key.toLowerCase() === 's' && e.ctrlKey) {
                e.preventDefault()
                form.submit()
            }

        })
    </script>
</body>

</html>