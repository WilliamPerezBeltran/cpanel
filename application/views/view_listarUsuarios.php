<style type="text/css">
  table tr td{
    width: 500px;
    padding-right: 10px;
    padding-left: 10px;
    margin:40px;
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

<!-- Button trigger modal -->

<!-- Modal -->

<!-- =========================================================================== -->




<div  class="box-body table-responsive no-padding">

<?php foreach($informacionUsuario as $informacion_Usuario){?>

              <table class="table table-hover">
                <tr>
                  <th><h4><p class="text-light-blue">Foto<div style="visibility: hidden;">...................................</div></p></h4></th>
                  <!-- pondho este div con visibility hidden para que me de un efecto de espacio entre columnas no lo pude hacer por css-->
                  <th><h4><p class="text-light-blue">Hoja de vida<div style="visibility: hidden;">...................................</div></p></h4></th>
                   <th><h4><p class="text-light-blue">Nombre<div style="visibility: hidden;">...................................</div><p></h4></th>


                  <th><h4><p class="text-light-blue">Genero<div style="visibility: hidden;">...................................</div></p></h4></th>

                  <th><h4><p class="text-light-blue">Email<div style="visibility: hidden;">...................................</div></p></h4></th>

                  <th><h4><p class="text-light-blue">Celular<div style="visibility: hidden;">...................................</div></p></h4></th>
                 
                  <th><h4><p class="text-light-blue">Cedula<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Edad<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Estudios<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Cargo<div style="visibility: hidden;">...................................</div><p></h4> </th>
                  <th><h4><p class="text-light-blue">Ciudad<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Localidad<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Moto<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Casa<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">proceso<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th><h4><p class="text-light-blue">Estado civil<div style="visibility: hidden;">...................................</div><p></h4></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
               
                  <td>
                    <img src="<?php echo base_url('public/imagenes/foto/'.$informacion_Usuario['info_foto']);?>" alt="Smiley face" height="100" width="100">
                  </td>

                  <td>
                  <a href="<?php echo base_url('public/imagenes/Hoja_de_vida/'.$informacion_Usuario['info_hojaDeVida']); ?>"><button style=" border:none;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><!-- boton de Launch demo modal -->Ver hoja de vida</button></td></a>
                  </td>
                

                  <td><?php echo $informacion_Usuario['info_Nombre'];?></td>
                  <td><?php echo $informacion_Usuario['info_Genero'];?></td>
                  <td><?php echo $informacion_Usuario['info_Email'];?></td>
                  <td><?php echo $informacion_Usuario['info_Celular'];?></td>
                  
                  <td><?php echo $informacion_Usuario['info_Cedula'];?></td>
                  <td><?php echo $informacion_Usuario['info_Edad'];?></td>
                  <td><?php echo $informacion_Usuario['nombreEstudios'];?></td>
                  <td><?php echo $informacion_Usuario['CargoSolicitado'];?></td>
                  <td><?php echo $informacion_Usuario['nombreCiudad'];?></td>
                  <td><?php echo $informacion_Usuario['LocalidadBogota'];?></td>
                  <td><?php echo $informacion_Usuario['info_Moto'];?></td>
                  <td><?php echo $informacion_Usuario['info_casa'];?></td>
                  <td><?php echo $informacion_Usuario['info_proceso'];?></td>
                  <td><?php echo $informacion_Usuario['info_estadoCivil'];?></td>




                  <td onclick="eliminar (<?php echo $informacion_Usuario['info_ID'];?>) "><i class="fa fa-trash" aria-hidden="true"></i></a></td>


                  <td><a href="<?php echo site_url('Principal/editarUsuario/'.$informacion_Usuario['info_ID']);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                  
                </tr>
              </table>
              <div style="height: 40px;"></div><!-- pongo este div con heifht de 40 px para que me un efecto de espaciado entre cada una de las usuarios-->
               <?php } ?>
            </div>


<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>


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
<script language="JavaScript1.2" type="text/javascript"> 
        function eliminar (id) 
        { 
            var statusConfirm = confirm("¿Realmente desea eliminar esto?"); 
            if (statusConfirm == true) 
            { 
                var william =window.location.href="http://alianzatemporal.com.co/Hojas_de_Vida/cpanel/index.php/Principal/desactivarUsuario/"+id;
                return true;
                console.log(william);
            } 
            
        } 
    </script>