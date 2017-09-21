
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
 <div class="row">
          <div class="col-md-4">
        <div style="width: 200px; height: 200px; border:1px solid silver;">
          <img height="200" width="200" src="<?php echo base_url('public/imagenes/foto/'.$usuario['info_foto']);?>">
        </div>
           <table class="table table-striped">
                <tr>
                  <th></th>
                  
                </tr>
                <tr>
                  <th style="width: 10px"></th>
                  <th>Informacion</th>
                  
                </tr>
                <tr>
                  <td>Nombre</td>
                  <td><?php echo $usuario['info_Nombre'];?></td>
                  
                <tr>
                  <td>Email</td>
                  <td><?php echo $usuario['info_Email'];?></td>
                  
                </tr>
                <tr>
                  <td>Celular</td>
                  <td><?php echo $usuario['info_Celular'];?></td>
                  
                </tr>
                
              </table>
        </div>
        <div class="col-md-8 box-body no-padding">
             <table class="table table-bordered">
              
                <tr>

                  <h2>Información</h2>
                </tr>
                <tr>
                  <td>Nombre</td>
                  <td>
                      <p><?php echo $usuario['info_Nombre'];?></p>
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>
                    <p><?php echo $usuario['info_Email'];?></p>
                  </td>
                </tr>
                <tr>
                  <td>Celular</td>
                  <td>
                    <p><?php echo $usuario['info_Celular'];?></p>
                  </td>
                </tr>
                <tr>
                  <td>hojaDeVida</td>
                  <td>
                    <p><?php echo $usuario['info_hojaDeVida'];?></p>
                  </td>
                </tr>
                <tr>
                  <td>foto</td>
                  <td>
                    <p><?php echo $usuario['info_foto'];?></p>
                  </td>
                </tr>
                <tr>
                  <td>Cedula</td>
                  <td>
                    <p><?php echo $usuario['info_Cedula'];?></p>
                  </td>
                </tr>

                <tr>
                  <td>Edad</td>
                  <td>
                    <p><?php echo $usuario['info_Edad'];?></p>
                  </td>
                </tr>

                <tr>
                  <td>Estudios</td>
                  <td>
                    <p><?php echo $usuario['nombreEstudios'];?></p>
                  </td>
                </tr>

                <tr>
                  <td>Cargo Solicitado</td>
                  <td>
                    <p><?php echo $usuario['CargoSolicitado'];?></p>
                  </td>
                </tr>

                <tr>
                  <td>Ciudad</td>
                  <td>
                   <p><?php echo $usuario['info_Ciudad'];?></p>
                  </td>
                </tr>

                <tr>
                  <td>Localidad Bogota</td>
                  <td>
                    <p><?php echo $usuario['LocalidadBogota'];?></p>
                  </td>
                </tr>


                <tr>
                  <td>Tiene Moto Propia </td>
                  <td>
                    <p><?php echo $usuario['info_Moto'];?></p>
                  </td>
                </tr>


                <tr>
                  <td>Vive en casa propia </td>
                  <td>
                    <p><?php echo $usuario['info_casa'];?></p>
                  </td>
                </tr>


                <tr>
                  <td>Ha estado en proceso antes </td>
                  <td>
                    <p><?php echo $usuario['info_proceso'];?></p>
                  </td>
                </tr>


                <tr>
                  <td>Estado Civil </td>
                  <td>
                    <p><?php echo $usuario['info_estadoCivil'];?></p>
                  </td>
                </tr>

                

              </table>
            </div>


            <div class="col-md-12"><br> 
             




               <?php foreach($infoComentariosYFecha as $infoComentarios_Y_Fecha){?>

                    <table class="table table-bordered">
                      <tr>
                        <td>fecha</td>
                        <td>
                          <p><?php echo  $infoComentarios_Y_Fecha['fecha'] ?></p>
                        </td>
                      </tr>
                      <tr>
                        <td>Comentario</td>
                        <td>
                            <p><?php echo  $infoComentarios_Y_Fecha['comentario'] ?></p>
                        </td>
                      </tr>
                    </table>

              <?php }?>




            </div>  

            


             
            


 </div>
       
          



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


































              