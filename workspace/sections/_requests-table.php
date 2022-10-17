  <div class="col-12">
    <div class="card">
      <div class="card-header "></div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" >
        <table class="table table-head-fixed table-bordered text-nowrap">
          <thead>
            <tr>

              <th>Estado</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>DNI</th>
              <th>Correo</th>
              <th id="action_th">Accción</th>
              <th>Direccion</th>
              <th>Fecha de Nacimiento</th> 
              <th>Edad</th>
              <th>Acta de nacimiento</th>
              <th>Boleta</th>
              <th>Notas Certificadas</th>
              <th>Certificado Buena Conducta</th>
              <th>Foto</th>
              <th>Nombre Representante</th>
              <th>Numero de Representante</th>
            </tr>
          </thead>
          <tbody id="table-request">

            <?php foreach ($requests as $request) { ?>

              <tr>


                <td><?php echo $request->get_status(); ?></td>
                <td><?php echo $request->get_name(); ?></td>
                <td><?php echo $request->get_last_name(); ?></td>
                <td><?php echo $request->get_DNI(); ?></td>
                <td><?php echo $request->get_email(); ?></td>

                <?php $request->get_status() == "Aceptado" || $request->get_status() == "Rechazado" ? $btn_status = "disabled" : $btn_status = ""; ?>

                <td>
                  
                  <button type="button" class="btn btn-success btn-request" btn-action="add" <?php echo $btn_status ?> id-user="<?php echo $request->get_id(); ?>">Aceptar</button>
                  <button type="button" class="btn btn-danger btn-request" btn-action="delete" <?php echo $btn_status ?> id-user="<?php echo $request->get_id(); ?>">Rechazar</button>
                </td>

              </tr>

            <?php  } ?>



          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>