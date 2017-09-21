  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="<?php echo base_url('public/imagenes/alianzaLogo.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ALIANZA</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>MENÙ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/Principal/index')?>"><i class="fa fa-circle-o"></i> Crear usuario</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/listarUsuarios')?>"><i class="fa fa-circle-o"></i> Listar usuarios</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/buscarUsuario')?>"><i class="fa fa-circle-o"></i> Buscar usuario</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/listarUsuariosDesactivados')?>"><i class="fa fa-circle-o"></i> Listar usuarios eliminados</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->