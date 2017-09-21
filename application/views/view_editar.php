<style type="text/css">
  .colorGris{
    color: blue;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
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
 <h2><p>Editar usuario</p></h2>


<?php $attributes = array('autocomplete' => 'off'); echo form_open_multipart('Principal/editarUsuario/'.$id,$attributes);?>

<?php echo validation_errors();?>

    <div class="col-md-12">
    <div style="width: 200px; height: 200px; border:1px solid silver;">
          <img height="200" width="200" src="<?php echo base_url('public/imagenes/foto/'.$infoUsuario['foto']);?>">
        </div>

        <div class=" col-md-6">

            <div class="form-group <?php echo (form_error('Nombre')==null)?'':'has-error';?> ">
                       <label>Nombre</label>
                       <input name="Nombre" value="<?php echo set_value('Nombre', $infoUsuario['Nombre']);?>" type="text" class="form-control" placeholder="Nombre...">
                        <?php echo '<span class="help-block">'.form_error('Nombre').'</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('Email')==null)?'':'has-error';?> ">
                        <label for="inputEmail3" class=" control-label">Email</label>
                       <input name="Email" value="<?php echo set_value('Email',$infoUsuario['Email']);?>" type="email" class="form-control" id="inputEmail3" placeholder="Email...">
                       <?php echo '<span class="help-block">'.form_error('Email').'</span>'; ?>
                    </div>

                     <div class="form-group <?php echo (form_error('Ciudad')==null)?'':'has-error';?> ">
                        <label>Ciudad</label>
                        <select name="Ciudad" class="form-control">
                        <option value="" disabled selected></option>
                        <?php foreach($infoCiudad as $info_Ciudad){?>
                        <option value="<?php echo $info_Ciudad['ID']?>" <?php echo set_select('Ciudad',$info_Ciudad['ID'],($infoUsuario['Ciudad']==$info_Ciudad['ID'])?true:false);?> ><?php  echo $info_Ciudad['valorCiudad']?></option>
                        <?php  } ?>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Ciudad').'</span>'; ?>
                    </div>
                    

                    <div class="form-group <?php echo (form_error('Celular')==null)?'':'has-error';?> ">
                       <label>Celular</label>
                       <input name="Celular" value="<?php echo set_value('Celular',$infoUsuario['Celular']);?>"  type="text" class="form-control" placeholder="Celular ...">
                       <?php echo '<span class="help-block">'.form_error('Celular').'</span>'; ?>
                    </div>
                    <div class="form-group  ">
                        <label for="exampleInputFile">Adjuntar Hoja de Vida</label>
                        <input name="Hoja_De_Vida" type="file" id="exampleInputFile">
                        <input style="display:none" name="Hoja_De_Vida1" type="text" id="exampleInputFile" value="<?php echo $infoUsuario['hojaDeVida']?>" id="exampleInputFile">
                        
                      </div> 

                     <div class="form-group  ">
                        <label for="exampleInputFile">Adjuntar foto</label>
                        <input name="Foto" type="file" id="exampleInputFile">
                        <input style="display:none" name="Foto1" type="text" value="<?php echo $infoUsuario['foto']?>" id="exampleInputFile">
                      </div>

                     

                       

                      <div class="form-group <?php echo (form_error('Cedula')==null)?'':'has-error';?> ">
                       <label>Cédula </label>
                       <input name="Cedula" value="<?php echo set_value('Cedula',$infoUsuario['Cedula']);?>"  type="text" class="form-control" placeholder="Cédula ...">
                       <?php echo '<span class="help-block">'.form_error('Cedula').'</span>'; ?>
                    </div>
                     
                    <div class="form-group <?php echo (form_error('Edad')==null)?'':'has-error';?> ">
                       <label>Edad</label>
                       <input name="Edad" value="<?php echo set_value('Edad',$infoUsuario['Edad']);?>"  type="text" class="form-control" placeholder="Edad ...">
                       <?php echo '<span class="help-block">'.form_error('Edad').'</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('Estudios')==null)?'':'has-error';?> ">
                        <label>Estudios</label>
                        <select name="Estudios"  class="form-control">
                        <option value="" disabled selected></option>
                           <?php foreach($infoEstudios as $info_Estudios ){?>
                             <option  value="<?php echo $info_Estudios['ID'];?>" " <?php echo set_select('Estudios',$info_Estudios['ID'],($infoUsuario['idEstudios']==$info_Estudios['ID'])?true:false );?>">  <?php echo $info_Estudios['tipoDeEstudio']?></option>
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
                        <option value="<?php echo $info_Cargo['ID']?>" <?php echo set_select('Cargo',$info_Cargo['ID'],($infoUsuario['idEstudios']==$info_Cargo['ID'])?true:false);?>">  <?php echo $info_Cargo['cargoSolicitado']?></option>
                        <?php  } ?>
                           
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Cargo').'</span>'; ?>
                    </div>

                    

                    <div class="form-group <?php echo (form_error('Localidad')==null)?'':'has-error';?> ">
                        <label>Localidad Bogota</label>
                        <select name="Localidad" class="form-control">
                        <option value="" disabled selected></option>
                        <?php foreach($infoLocalidad as $info_Localidad){?>
                        <option value="<?php echo $info_Localidad['ID']?>" <?php echo set_select('Localidad',$info_Localidad['ID'],($infoUsuario['idLocalidadBogota']==$info_Localidad['ID'])?true:false);?> ><?php echo $info_Localidad['localidadBogota']?></option>
                        <?php  } ?>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Localidad').'</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('Moto')==null)?'':'has-error';?> ">
                        <label>Tiene Moto Propia</label>
                        <select name="Moto" class="form-control">
                           <option value="<?php echo $infoUsuario['Moto']?>" ><?php echo $infoUsuario['Moto']?></option>
                           <option value="SI" <?php echo set_select('Moto','SI');?> >SI</option>
                           <option value="NO" <?php echo set_select('Moto','NO');?> >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Moto').'</span>'; ?>
                    </div>

                     <div class="form-group <?php echo (form_error('Casa')==null)?'':'has-error';?> ">
                        <label>Vive en casa propia </label>
                        <select name="Casa" class="form-control">
                           <option value="<?php echo $infoUsuario['casa']?>" ><?php echo $infoUsuario['casa']?></option>
                           <option value="SI"  <?php echo set_select('Casa','SI');?>  >SI</option>
                           <option value="NO"  <?php echo set_select('Casa','NO');?>  >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Casa').'</span>'; ?>
                    </div>

                     <div class="form-group <?php echo (form_error('Proceso')==null)?'':'has-error';?> ">
                        <label>Ha estado en proceso antes</label>
                        <select name="Proceso" class="form-control">
                           <option value="<?php echo $infoUsuario['proceso']?>" ><?php echo $infoUsuario['proceso']?></option>
                           <option value="SI"  <?php echo set_select('Proceso','SI');?>  >SI</option>
                           <option value="NO"  <?php echo set_select('Proceso','NO');?>  >NO</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('Proceso').'</span>'; ?>
             </div>

                    
                    <div class="form-group <?php echo (form_error('estadoCivil')==null)?'':'has-error';?> ">
                        <label>Estado Civil </label>
                        <select name="estadoCivil" class="form-control">
                           <option value="<?php echo $infoUsuario['estadoCivil']?>" ><?php echo $infoUsuario['estadoCivil']?></option>
                           <option value="SOLTERO(A)"  <?php echo set_select('estadoCivil','SOLTERO(A)');?>  >SOLTERO(A)</option>
                           <option value="CASADO(A)"  <?php echo set_select('estadoCivil','CASADO(A)');?>  >CASADO(A)</option>
                           <option value="VIUDO(A)"  <?php echo set_select('estadoCivil','VIUDO(A)');?>  >VIUDO(A)</option>
                           <option value="DIVORCIADO(A)"  <?php echo set_select('estadoCivil','DIVORCIADO(A)');?>  >DIVORCIADO(A)</option>
                        </select>
                        <?php echo '<span class="help-block">'.form_error('estadoCivil').'</span>'; ?>
                    </div>
                    <br><br><br><br>

                    </div>

                    <!-- ========== -->
                    <!-- =========================================================================== -->
                    <!-- Button trigger modal -->
             <a href="<?php echo site_url('Principal/crearComentarioDesdeEditar/'.$infoUsuario['ID']);?>"><i class="fa fa-plus fa-lg" aria-hidden="true">Adicionar comentario</i></a>

<!-- =========================================================================== -->
<!-- Muestra todos los comentarios del id asociado -->

                    <div class="col-md-12"><br> 
                         <?php $contador=1; ?>

                         <?php foreach($infoComentariosYFecha as $infoComentarios_Y_Fecha){?>

                              <table class="table table-bordered">
                                <tr>
                                  <td><b>fecha</b></td>
                                  <td>
                                    <p><?php echo  $infoComentarios_Y_Fecha['fecha'] ?></p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <b>Comentario</b> <?php echo $contador++;?>
                                  </td>
                                  <td>
                                    <p><?php echo  $infoComentarios_Y_Fecha['comentario'] ?></p>
                                    <p><?php //echo  $infoComentarios_Y_Fecha['ID'] ?></p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <b>Opciones</b>
                                  </td>
                                  <td>

                                    <p><a href="<?php echo site_url('Principal/editarComentarioDesdeEditar/'.$infoComentarios_Y_Fecha['ID']);?>"><i style="float:right;" class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a><p>Editar Comentario</p>

</p>
                                  </td>
                                </tr>
                              </table>

                        <?php }?>

                    </div>  
            
            
    </div>
       <a href="<?php echo site_url('Principal/editarUsuario/'.$infoUsuario['ID']);?>"><button type="submit" class="btn btn-success">enviar</button></a>
               
</form>



<!-- =========================================================================== -->
<!-- mostrar comentarios -->






















       

         


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

