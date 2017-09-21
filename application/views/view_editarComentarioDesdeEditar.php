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
                                 <!-- La aplicacion inicia aqui-->
            <form action="<?php echo site_url('Principal/editarComentarioDesdeEditar/'.$infoComentariosYFecha['ID_usuario']); ?>" method="POST" role="form" >

                  <table class="table table-bordered">

                      <tr style="display:none">
                        <td>id del comentario</td>
                        <td>
                          
                           <!-- <p><?php // echo $infoComentariosYFecha['ID']?></p>-->

                          <div  class="form-group <?php echo (form_error('id_del_comentario')==null)?'':'has-error';?> ">
                                 <input name="id_del_comentario" value="<?php echo set_value('id_del_comentario', $infoComentariosYFecha['ID']);?>" type="text" class="form-control" placeholder="id_del_comentario...">
                                  <?php echo '<span class="help-block">'.form_error('id_del_comentario').'</span>'; ?>
                              </div>
                        </td>
                      </tr>

                      <tr style="display:none">
                        <td>id del del usuairo</td>
                        <td>
                          <!-- <p><?php // echo $infoComentariosYFecha['ID_usuario']?></p>-->
                          <div class="form-group <?php echo (form_error('comentario')==null)?'':'has-error';?> ">
                                 <input name="id_del_usuario" value="<?php echo set_value('id_del_usuario', $infoComentariosYFecha['ID_usuario']);?>" type="text" class="form-control" placeholder="id_del_usuario...">
                                  <?php echo '<span class="help-block">'.form_error('id_del_usuario').'</span>'; ?>
                              </div>
                        </td>
                      </tr>
                      <tr style="display:none" style="display:none">
                        <td>fecha</td>
                        <td>
                          <p></p>
                           <!-- <?php // echo $infoComentariosYFecha['fecha']?>-->

                          <div class="form-group <?php echo (form_error('fecha')==null)?'':'has-error';?> ">
                                 <input name="fecha" value="<?php echo set_value('fecha', $infoComentariosYFecha['fecha']);?>" type="text" class="form-control" placeholder="fecha...">
                                  <?php echo '<span class="help-block">'.form_error('fecha').'</span>'; ?>
                              </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Editar comentario</td>
                        <td>
                            
                              <div class="form-group">
                                <textarea name="comentario"  class="form-control" rows="3" placeholder="Enter ...">
                                   <?php  echo $infoComentariosYFecha['comentario']?>
                                </textarea>
                              </div>
                        </td>
                      </tr>
                    </table>
                    <button type="submit" class="btn  btn-success">enviar</button>  

            </form>


<!-- La aplicacion acaba aqui-->
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

