  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small></small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/Principal/index')?>"><i class="fa fa-circle-o"></i> Crear usuario</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/listarUsuarios')?>"><i class="fa fa-circle-o"></i> Listar usuarios</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/buscarUsuario')?>"><i class="fa fa-circle-o"></i> Buscar usuario</a></li>
            <li><a href="<?php echo base_url('index.php/Principal/listarUsuariosDesactivados')?>"><i class="fa fa-circle-o"></i> Listar usuarios eliminados</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">


 <!-- =========================================================================== -->
 <!-- La aplicacion inicia aqui-->
 <!-- 
         <form action="<?php // echo site_url('Principal/buscarUsuario'); ?>" method="POST" role="form" >

              <div class="form-group <?php  // echo (form_error('Cedula') == null) ? '' : 'has-error'; ?>">
                  <label>Digite el número de la cédula</label>
                  <input name="Cedula" type="text" class="form-control" placeholder="Enter Cedula..."value="<?php  // echo set_value('Cedula') ?>">
                   <?php  // echo '<span class="help-block">' . form_error('Cedula') . '</span>'; ?>
              </div>
              <button type="submit" class="btn  btn-success">enviar</button>          
             
          </form>
 -->
          <form action="<?php echo site_url('Principal/buscarUsuario'); ?>" method="POST" role="form" >

          <input style="display:none;" type="radio" name="escondido" checked="true">

         

              

              
           

                     
                    

                    
















                    <div class="col-md-12">

        <div class=" col-md-6">
           <div class="form-group <?php echo (form_error('infoParaBuscar') == null) ? '' : 'has-error'; ?>">
                  <label>Buscar usuario por nombre</label>
                  <input name="infoParaBuscar" type="text" class="form-control" placeholder="Enter infoParaBuscar..."value="<?php echo set_value('infoParaBuscar') ?>">
                   <?php echo '<span class="help-block">' . form_error('infoParaBuscar') . '</span>'; ?>
              </div><br>

                    <div class="form-group <?php echo (form_error('Genero')==null)?'':'has-error';?> ">
                        <label>Genero</label>
                        <select name="Genero" class="form-control">
                           <option value="" disabled selected></option>
                           <option value="MASCULINO" <?php echo set_select('Genero','MASCULINO');?> >MASCULINO</option>
                           <option value="FEMENINO" <?php echo set_select('Genero','FEMENINO');?> >FEMENINO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Genero').'</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('Email')==null)?'':'has-error';?> ">
                        <label for="inputEmail3" class=" control-label">Email</label>
                       <input name="Email" value="<?php echo set_value('Email');?>" type="email" class="form-control" id="inputEmail3" placeholder="Email...">
                       <?php echo '<span class="help-block">'.form_error('Email').'</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('Celular')==null)?'':'has-error';?> ">
                       <label>Celular</label>
                       <input name="Celular" value="<?php echo set_value('Celular');?>"  type="text" class="form-control" placeholder="Celular ...">
                       <?php echo '<span class="help-block">'.form_error('Celular').'</span>'; ?>
                    </div>

                     

                      <div class="form-group <?php echo (form_error('Cedula')==null)?'':'has-error';?> ">
                       <label>Cédula </label>
                       <input name="Cedula" value="<?php echo set_value('Cedula');?>"  type="text" class="form-control" placeholder="Cédula ...">
                       <?php echo '<span class="help-block">'.form_error('Cedula').'</span>'; ?>
                    </div>
                     
                    <div class="form-group <?php echo (form_error('Edad')==null)?'':'has-error';?> ">
                       <label>Edad</label>
                       <input name="Edad" value="<?php echo set_value('Edad');?>"  type="text" class="form-control" placeholder="Edad ...">
                       <?php echo '<span class="help-block">'.form_error('Edad').'</span>'; ?>
                    </div>
                    <div class="form-group <?php echo (form_error('Estudios')==null)?'':'has-error';?> ">
                        <label>Estudios</label>
                        <select name="Estudios"  class="form-control">
                        <option value="" disabled selected></option>
                           <?php foreach($infoEstudios as $info_Estudios ){?>
                             <option  value="<?php echo $info_Estudios['ID'];?>" " <?php echo set_select('Estudios',$info_Estudios['ID']);?>">  <?php echo $info_Estudios['tipoDeEstudio']?></option>
                           <?php } ?>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Estudios').'</span>'; ?>
                    </div>
            </div>

            <div class=" col-md-6">

                    <div class="form-group <?php echo (form_error('Cargo')==null)?'':'has-error';?> ">
                        <label>Cargo Solicitado</label>
                        <select name="Cargo" class="form-control">
                        <option value="" disabled selected></option>
                        <?php foreach($infoCargo as $info_Cargo){?>
                        <option value="<?php echo $info_Cargo['ID']?>" <?php echo set_select('Cargo',$info_Cargo['ID']);?>">  <?php echo $info_Cargo['cargoSolicitado']?></option>
                        <?php  } ?>
                           
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Cargo').'</span>'; ?>
                    </div><br>
                    <div class="form-group <?php echo (form_error('Ciudad')==null)?'':'has-error';?> ">
                        <label>Ciudad</label>
                        <select name="Ciudad" class="form-control">
                        <option value="" disabled selected></option>
                        <?php foreach($infoCiudad as $info_Ciudad){?>
                        <option value="<?php echo $info_Ciudad['ID']?>" <?php echo set_select('Ciudad',$info_Ciudad['ID']);?> ><?php echo $info_Ciudad['valorCiudad']?></option>
                        <?php  } ?>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Ciudad').'</span>'; ?>
                    </div>
             
                    <div class="form-group <?php echo (form_error('Localidad')==null)?'':'has-error';?> ">
                        <label>Localidad Bogota</label>
                        <select name="Localidad" class="form-control">
                        <option value="" disabled selected></option>
                        <?php foreach($infoLocalidad as $info_Localidad){?>
                        <option value="<?php echo $info_Localidad['ID']?>" <?php echo set_select('Localidad',$info_Localidad['ID']);?> ><?php echo $info_Localidad['localidadBogota']?></option>
                        <?php  } ?>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Localidad').'</span>'; ?>
                    </div><br>

                    <div class="form-group <?php echo (form_error('Moto')==null)?'':'has-error';?> ">
                        <label>Tiene Moto Propia</label>
                        <select name="Moto" class="form-control">
                           <option value="" disabled selected></option>
                           <option value="SI" <?php echo set_select('Moto','SI');?> >SI</option>
                           <option value="NO" <?php echo set_select('Moto','NO');?> >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Moto').'</span>'; ?>
                    </div>

                     <div class="form-group <?php echo (form_error('Casa')==null)?'':'has-error';?> ">
                        <label>Vive en casa propia </label>
                        <select name="Casa" class="form-control">
                           <option value="" disabled selected></option>
                           <option value="SI"  <?php echo set_select('Casa','SI');?>  >SI</option>
                           <option value="NO"  <?php echo set_select('Casa','NO');?>  >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Casa').'</span>'; ?>
                    </div>

                     <div class="form-group <?php echo (form_error('Proceso')==null)?'':'has-error';?> ">
                        <label>Ha estado en proceso antes</label>
                        <select name="Proceso" class="form-control">
                           <option value="" disabled selected></option>
                           <option value="SI"  <?php echo set_select('Proceso','SI');?>  >SI</option>
                           <option value="NO"  <?php echo set_select('Proceso','NO');?>  >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Proceso').'</span>'; ?>
             </div>

                    
                    <div class="form-group <?php echo (form_error('estadoCivil')==null)?'':'has-error';?> ">
                        <label>Estado Civil </label>
                        <select name="estadoCivil" class="form-control">
                           <option value="" disabled selected></option>
                           <option value="SOLTERO(A)"  <?php echo set_select('estadoCivil','SOLTERO(A)');?>  >SOLTERO(A)</option>
                           <option value="CASADO(A)"  <?php echo set_select('estadoCivil','CASADO(A)');?>  >CASADO(A)</option>
                           <option value="VIUDO(A)"  <?php echo set_select('estadoCivil','VIUDO(A)');?>  >VIUDO(A)</option>
                           <option value="DIVORCIADO(A)"  <?php echo set_select('estadoCivil','DIVORCIADO(A)');?>  >DIVORCIADO(A)</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('estadoCivil').'</span>'; ?>
                    </div>
                    <br><br><br><br>
            
            </div>
    </div>





























                   

              <button type="submit" class="btn  btn-success">enviar</button>          
             
          </form>










<!-- =========================================================================== -->
        <!-- /.col -->
       
 
         


 <!-- =========================================================================== -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

