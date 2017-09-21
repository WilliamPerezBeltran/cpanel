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

 <div class="col-md-12">
              <form action="<?php echo site_url('Principal/crearComentarioDesdeEditar/'.$id); ?>" method="POST" role="form" >
                <div class="form-group">
                    <label>Ingresar comentario</label>
                    <textarea name="comentario" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <button type="submit" class="btn  btn-success">enviar</button>    
            </form>
            </div>    
         

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

