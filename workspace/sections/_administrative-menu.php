<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <?php require_once "_sideHeaderMenu.php" ; ?>


    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="../administrador/perfil_institucion.php" class="nav-link">
            <p>
              Perfil de la institución
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="../administrador/Materias.php" class="nav-link">
            <p>
              Materias
            </p>
          </a>

        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
             
              <p>
                Inscripciones
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="configuracion_ins.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Configuración</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solicitudes</p>
                </a>
              </li>
             
            </ul>
          </li>
      </ul>
    </nav>

  </div>
</aside>