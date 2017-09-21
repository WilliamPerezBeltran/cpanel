<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador_principal extends CI_Controller {


    public function index(){
        $this->load->library('form_validation');
                $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('Genero', 'Genero', 'required');
                $this->form_validation->set_rules('Email', 'Email', 'required');
                $this->form_validation->set_rules('Celular', 'Celular', 'required|numeric');
                $this->form_validation->set_rules('Cedula', 'Cedula', 'required|numeric');
                //$this->form_validation->set_rules('Cedula', 'Cedula', 'required|numeric|is_unique[datos_hoja_de_vida.Cedula]');
                $this->form_validation->set_rules('Edad', 'Edad', 'required|numeric');
                $this->form_validation->set_rules('Estudios', 'Estudios', 'required');
                $this->form_validation->set_rules('Cargo', 'Cargo', 'required');
                $this->form_validation->set_rules('Ciudad', 'Ciudad', 'required');
                $this->form_validation->set_rules('Localidad', 'Localidad', 'required');
                $this->form_validation->set_rules('Moto', 'Moto', 'required');
                $this->form_validation->set_rules('Casa', 'Casa', 'required');
                $this->form_validation->set_rules('Proceso', 'Proceso', 'required');
                $this->form_validation->set_rules('estadoCivil', 'estadoCivil', 'required');

                 if (empty($_FILES['Foto']['name'])) {
                    $this->form_validation->set_rules('Foto', 'foto', 'required');
                }else{
                    $nameFoto=$_FILES['Foto']['name'];
                    $extensionFoto=explode(".",$nameFoto);
                }
                if (empty($_FILES['Hoja_De_Vida']['name'])) {
                    $this->form_validation->set_rules('Hoja_De_Vida', 'cv', 'required');
                }else{
                    $nameCv=$_FILES['Hoja_De_Vida']['name'];
                    $extensionCv=explode(".",$nameCv);
                }

                if($this->form_validation->run()){

                        //carga la hoja de vida
                        $config['upload_path'] = 'public/imagenes/Hoja_de_vida/';
                        $config['allowed_types'] = 'pdf';
                        $archivo=date('YmdHis');
                        $config['file_name'] = 'cv'.$archivo.'.'.$extensionCv[1];
                        //$config['file_name'] = 'cv'.$archivo.'.pdf';
                        $config['file_ext_tolower'] = true;
                        $this->load->library('upload',$config);
                        if($this->upload->do_upload('Hoja_De_Vida')){
                            $nombreCv=$this->upload->data('file_name');
                        }
                        // inicializa la carga para poder cargar otro archivo
                        $this->upload->initialize($config);
                        $this->upload->do_upload('Hoja_De_Vida');
                         echo $this->upload->display_errors();
                        //carga la foto
                        $config2['upload_path'] = 'public/imagenes/foto/';
                        $config2['allowed_types'] = 'pdf|png|jpg|jpeg';
                        $archivo=date('YmdHis');
                        $config2['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
                        $config2['file_ext_tolower'] = true;
                        $this->load->library('upload',$config2);
                        if($this->upload->do_upload('foto')){
                            $nombreFoto=$this->upload->data('file_name');
                        }
                        // inicializa la carga para poder cargar otro archivo
                        $this->upload->initialize($config2);
                        $this->upload->do_upload('Foto');
                        echo $this->upload->display_errors();

                        $data['Nombre'] = $this->input->post('Nombre');
                        $data['Genero'] = $this->input->post('Genero');
                        $data['Email'] = $this->input->post('Email');
                        $data['Celular'] = $this->input->post('Celular');
                        $data['hojaDeVida'] = $config['file_name'];
                        $data['foto'] = $config2['file_name'];
                        $data['Cedula'] = $this->input->post('Cedula');
                        $data['Edad'] = $this->input->post('Edad');
                        $data['idEstudios'] = $this->input->post('Estudios');
                        $data['idCargoSolicitado']  = $this->input->post('Cargo');//entra todos los datos como un vector
                        $data['Ciudad'] = $this->input->post('Ciudad');
                        $data['idLocalidadBogota']  = $this->input->post('Localidad');
                        $data['Moto']  = $this->input->post('Moto');
                        $data['casa']  = $this->input->post('Casa');
                        $data['proceso']  = $this->input->post('Proceso');
                        $data['estadoCivil']  = $this->input->post('estadoCivil');
                        //en la base de datos al campo estado le asigna uno que quiere decir que esta activo
                        $data['estado']  =1;

                        $this->load->model('model_principal');
                        $this->model_principal->crearUsuario($data);
                        redirect('controlador_principal/listarUsuarios');

                 }
                        //trae la informacion de los estudios
                $this->load->model('model_principal');
                $info['infoEstudios'] = $this->model_principal->get_estudios();
                //trae la informacion de  cargo
                $this->load->model('model_principal');
                $info['infoCargo'] = $this->model_principal->get_cargo();
                //trae la informacion de  localidades
                $this->load->model('model_principal');
                $info['infoLocalidad'] = $this->model_principal->get_localidad();

                //trae la informacion de  ciudades
                $this->load->model('model_principal');
                $info['infoCiudad'] = $this->model_principal->get_ciudad();

                //var_dump($info['infoEstudios']);
                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_admin',$info);
                $this->load->view('templates/footer.php');
    }


        public function listarUsuarios(){
                $this->load->model('model_principal');
                $info['informacionUsuario']=$this->model_principal->getInformacionUsuario();
                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_listarUsuarios',$info);
                $this->load->view('templates/footer.php');

        }

        public function desactivarUsuario($id){

                $this->load->model('model_principal');
                $data['estado']  =0;
                $this->model_principal->desactivarUsuario( $data,$id);
                redirect('controlador_principal/listarUsuarios');

        }
         public function listarUsuariosDesactivados(){

                $this->load->model('model_principal');
                $info['informacionUsuario']=$this->model_principal->getInformacionUsuarioDesactivados();
                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_listarUsuariosDesactivados',$info);
                $this->load->view('templates/footer.php');

        }

        public function editarUsuario($id){

                $this->load->library('form_validation');
                $this->form_validation->set_rules('Nombre', 'Nombre');
                $this->form_validation->set_rules('Email', 'Email', 'required');
                $this->form_validation->set_rules('Celular', 'Celular', 'required|numeric');
                $this->form_validation->set_rules('Cedula', 'Cedula', 'required|numeric');
                $this->form_validation->set_rules('Edad', 'Edad', 'required|numeric');
                $this->form_validation->set_rules('Estudios', 'Estudios', 'required');
                $this->form_validation->set_rules('Cargo', 'Cargo', 'required');
                $this->form_validation->set_rules('Ciudad', 'Ciudad', 'required');
                $this->form_validation->set_rules('Localidad', 'Localidad', 'required');
                $this->form_validation->set_rules('Moto', 'Moto', 'required');
                $this->form_validation->set_rules('Casa', 'Casa', 'required');
                $this->form_validation->set_rules('Proceso', 'Proceso', 'required');
                $this->form_validation->set_rules('estadoCivil', 'estadoCivil', 'required');

                if($this->form_validation->run()){


                      // si no escoge ningun file para reemplazar es decir si no edita ni la foto ni la cv
                     if (empty($_FILES)) {
                        $data['hojaDeVida'] = $this->input->post('Hoja_De_Vida1');
                        $data['foto'] = $this->input->post('Foto1');


                    }else{//si escoge solo la hoja de vida para editar
                        if(empty($_FILES['Hoja_De_Vida']['name'])){
//

                            $nameCv=$_FILES['Hoja_De_Vida']['name'];
                            $extensionCv=explode(".",$nameCv);
                            $config['upload_path'] = 'public/imagenes/Hoja_de_vida/';
                            $config['allowed_types'] = 'pdf';
                            $archivo=date('YmdHis');
                            $config['file_name'] = 'cv'.$archivo.'.'.$extensionCv[1];
                            //$config['file_name'] = 'cv'.$archivo.'.pdf';
                            $config['file_ext_tolower'] = true;
                            $this->load->library('upload',$config);
                            if($this->upload->do_upload('Hoja_De_Vida')){
                                $nombreCv=$this->upload->data('file_name');

                            }
                            $data['hojaDeVida'] = $config['file_name'];
                            $data['foto'] = $this->input->post('Foto1');
                        }//si escoge solo la foto  para editar
                        if(empty($_FILES['Foto']['name'])){
                            $nameFoto=$_FILES['Foto']['name'];
                            $extensionFoto=explode(".",$nameFoto);
                            //carga la hoja de vida
                            $config['upload_path'] = 'public/imagenes/foto/';
                            $config['allowed_types'] = 'pdf|png|jpg|jpeg';

                            $archivo=date('YmdHis');
                            $config['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
                            $config['file_ext_tolower'] = true;
                            $this->load->library('upload',$config);

                            if($this->upload->do_upload('Foto')){
                                //guarda en elos archivos el nombre de la foto
                                $nombreFoto=$this->upload->data('file_name');

                            }
                                // inicializa la carga para poder cargar otro archivo
                                $this->upload->initialize($config);
                                $this->upload->do_upload('Foto');
                                 echo $this->upload->display_errors();
                            $data['hojaDeVida'] = $this->input->post('Hoja_De_Vida1');
                            $data['foto'] = $config['file_name'];
                        }
                         //si escojo la foto y la cv para editar
                        if(empty($_FILES['Foto']['name']) && empty($_FILES['Hoja_De_Vida']['name']) ){
                            //carga la hoja de vida
                        $config['upload_path'] = 'public/imagenes/Hoja_de_vida/';
                        $config['allowed_types'] = 'pdf';

                        $archivo=date('YmdHis');
                        $config['file_name'] = 'cv'.$archivo.'.'.$extensionCv[1];
                        //$config['file_name'] = 'cv'.$archivo.'.pdf';
                        $config['file_ext_tolower'] = true;
                        $this->load->library('upload',$config);
                        if($this->upload->do_upload('Hoja_De_Vida')){
                            $nombreCv=$this->upload->data('file_name');

                        }
                        // inicializa la carga para poder cargar otro archivo
                        $this->upload->initialize($config);
                        $this->upload->do_upload('Hoja_De_Vida');
                         echo $this->upload->display_errors();
                        //carga la foto
                        $config2['upload_path'] = 'public/imagenes/foto/';
                        $config2['allowed_types'] = 'pdf|png|jpg|jpeg';
                        $archivo=date('YmdHis');
                        $config2['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
                        $config2['file_ext_tolower'] = true;
                        $this->load->library('upload',$config2);
                        if($this->upload->do_upload('foto')){
                            $nombreFoto=$this->upload->data('file_name');

                        }

                        // inicializa la carga para poder cargar otro archivo
                        $this->upload->initialize($config2);
                        $this->upload->do_upload('Foto');
                        echo $this->upload->display_errors();

                        $data['hojaDeVida'] = $config['file_name'];
                        $data['foto'] = $config2['file_name'];


                        }
                    }

                        $data['Nombre'] = $this->input->post('Nombre');
                        $data['Email'] = $this->input->post('Email');
                        $data['Celular'] = $this->input->post('Celular');
                        //$data['hojaDeVida'] = $this->input->post('Hoja_De_Vida1');
                        //$data['foto'] = $this->input->post('Foto1');
                        $data['Cedula'] = $this->input->post('Cedula');
                        $data['Edad'] = $this->input->post('Edad');
                        $data['idEstudios'] = $this->input->post('Estudios');
                        $data['idCargoSolicitado']  = $this->input->post('Cargo');//entra todos los datos como un vector

                        $data['Ciudad'] = $this->input->post('Ciudad');
                        $data['idLocalidadBogota']  = $this->input->post('Localidad');
                        $data['Moto']  = $this->input->post('Moto');
                        $data['casa']  = $this->input->post('Casa');
                        $data['proceso']  = $this->input->post('Proceso');
                        $data['estadoCivil']  = $this->input->post('estadoCivil');

                        $this->load->model('model_principal');
                        $this->model_principal->editarUsuario($data,$id);
                        redirect('controlador_principal/listarUsuarios');

                 }



                 //trae comentarios del id asociado
                 $this->load->model('model_principal');
                $info['infoComentariosYFecha'] =$this->model_principal->listarComentario($id);

                //trae la informacion del id asociado
                $this->load->model('model_principal');
                $info['infoUsuario'] = $this->model_principal->consultarInfoUsuario($id);

                 //trae la informacion de  ciudades
                //trae la informacion de  ciudades
                $this->load->model('model_principal');
                $info['infoCiudad'] = $this->model_principal->get_ciudad();

                //trae la informacion de los estudios
                $this->load->model('model_principal');
                $info['infoEstudios'] = $this->model_principal->get_estudios();

                //trae la informacion de  cargo
                $this->load->model('model_principal');
                $info['infoCargo'] = $this->model_principal->get_cargo();
                //trae la informacion de  localidades
                $this->load->model('model_principal');
                $info['infoLocalidad'] = $this->model_principal->get_localidad();
                $info['id'] = $id;
                //var_dump($info['infoCargo']);
                //var_dump($info['infoEstudios']);
                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_editar',$info);
                $this->load->view('templates/footer.php');
    }



    public function buscarUsuario(){

        $this->load->library('form_validation');
                $this->form_validation->set_rules('escondido', 'escondido', 'required');
                $this->form_validation->set_rules('infoParaBuscar', 'infoParaBuscar');
                $this->form_validation->set_rules('Ciudad', 'Ciudad');
                $this->form_validation->set_rules('Localidad', 'Localidad');
                $this->form_validation->set_rules('Cargo', 'Cargo');
                //========
                $this->form_validation->set_rules('Genero', 'Genero');
                $this->form_validation->set_rules('Email', 'Email');
                $this->form_validation->set_rules('Celular', 'Celular');
                $this->form_validation->set_rules('Cedula', 'Cedula');
                $this->form_validation->set_rules('Edad', 'Edad');
                $this->form_validation->set_rules('Estudios', 'Estudios');
                $this->form_validation->set_rules('Moto', 'Moto');
                $this->form_validation->set_rules('Casa', 'Casa');
                $this->form_validation->set_rules('Proceso', 'Proceso');
                $this->form_validation->set_rules('estadoCivil', 'estadoCivil');

                if($this->form_validation->run()){

                    $informacionIngresada['infoGeneral'] = $this->input->post('infoParaBuscar');
                    $informacionIngresada['Ciudad'] = $this->input->post('Ciudad');
                    $informacionIngresada['idLocalidadBogota'] = $this->input->post('Localidad');
                    $informacionIngresada['idCargoSolicitado'] = $this->input->post('Cargo');
                    //========
                    $informacionIngresada['Genero '] = $this->input->post('Genero');
                    $informacionIngresada['Email'] = $this->input->post('Email');
                    $informacionIngresada['Celular'] = $this->input->post('Celular');
                    $informacionIngresada['Cedula'] = $this->input->post('Cedula');
                    $informacionIngresada['Edad'] = $this->input->post('Edad');
                    $informacionIngresada['idEstudios'] = $this->input->post('Estudios');
                    $informacionIngresada['Moto']  = $this->input->post('Moto');
                    $informacionIngresada['casa']  = $this->input->post('Casa');
                    $informacionIngresada['proceso']  = $this->input->post('Proceso');
                    $informacionIngresada['estadoCivil']  = $this->input->post('estadoCivil');
                    $this->load->model('model_principal');
                    $info['infousuario']=$this->model_principal->buscarInfoUsuario($informacionIngresada);





                    if(empty($info['infousuario'])){
                        redirect('controlador_principal/failCedula');

                    }else{
                        //redirect('controlador_principal/exitoCedula/'.$id);
                        $this->load->view('templates/header.php');
                        $this->load->view('templates/aside.php');
                        $this->load->view('view_listarBusquedaUsuarios',$info);
                        $this->load->view('templates/footer.php');


                    }


                 }else{
                    //trae la informacion de los estudios
                $this->load->model('model_principal');
                $info['infoEstudios'] = $this->model_principal->get_estudios();
                //trae la informacion de  cargo
                $this->load->model('model_principal');
                $info['infoCargo'] = $this->model_principal->get_cargo();
                //trae la informacion de  localidades
                $this->load->model('model_principal');
                $info['infoLocalidad'] = $this->model_principal->get_localidad();

                //trae la informacion de  ciudades
                $this->load->model('model_principal');
                $info['infoCiudad'] = $this->model_principal->get_ciudad();

                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_buscarUsuario',$info);
                $this->load->view('templates/footer.php');

                 }







        }
         public function failCedula(){

                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_buscarUsuarioFaile');
                $this->load->view('templates/footer.php');
        }
        public function exitoCedula($id){
                $this->load->model('model_principal');
                $info['usuario']=$this->model_principal->consultarInfoUsuario1($id);

                $info['id'] = $id;

                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_buscarUsuarioExito',$info);
                $this->load->view('templates/footer.php');
        }
         public function ComentariosUsuarios($id){

            $this->load->library('form_validation');
                $this->form_validation->set_rules('comentario', 'comentario', 'required');
                if($this->form_validation->run()){
                    $data['comentario'] = $this->input->post('comentario');
                    $data['ID_usuario'] = $id;
                    $data['fecha'] = "Fecha de creacion: " . date("d") . " del " . date("m") . " de " . date("Y")." a las ".date(" g:i a");

                    $this->load->model('model_principal');
                    $this->model_principal->insertarcomentario($data);
                    redirect('controlador_principal/mostrarComentarios/'.$id);

                 }

                $this->load->model('model_principal');
                $info['informacionUsuario']=$this->model_principal->getInformacionUsuario();
                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_listarUsuarios',$info);
                $this->load->view('templates/footer.php');
        }

        public function mostrarComentarios($id){

                $this->load->model('model_principal');
                $info['usuario']=$this->model_principal->consultarInfoUsuario1($id);
                $info['id'] = $id;

                $this->load->model('model_principal');
                $info['infoComentariosYFecha'] =$this->model_principal->listarComentario($id);

                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_verComentarios',$info);
                $this->load->view('templates/footer.php');
        }

        public function crearComentarioDesdeEditar($id){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('comentario', 'comentario', 'required');
            $info['id'] = $id;

                if($this->form_validation->run()){
                    $data['comentario'] = $this->input->post('comentario');
                    $data['ID_usuario'] = $id;
                    $data['fecha'] = "Fecha de creacion: " . date("d") . " del " . date("m") . " de " . date("Y")." a las ".date(" g:i a");

                    $this->load->model('model_principal');
                    $this->model_principal->insertarcomentario($data);
                    redirect('controlador_principal/editarUsuario/'.$id);

                  }

                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_crearComentarioDesdeEditar',$info);
                $this->load->view('templates/footer.php');

         }

//el id que le entra a editarComentarioDesdeEditar es el $id del comentario
         public function editarComentarioDesdeEditar($id){
               $this->load->library('form_validation');
                $this->form_validation->set_rules('comentario', 'comentario', 'required');
                $this->form_validation->set_rules('id_del_comentario', 'id_del_comentario');
                $this->form_validation->set_rules('id_del_usuario', 'id_del_usuario');
                $this->form_validation->set_rules('fecha', 'fecha');

                if($this->form_validation->run()){
                        $data['ID'] = $this->input->post('id_del_comentario');
                        $data['ID_usuario'] = $this->input->post('id_del_usuario');
                        $data['comentario'] = $this->input->post('comentario');
                        $data['fecha'] = $this->input->post('fecha');
                        $id_usuario= $this->input->post('id_del_usuario');
                        $id_comentario= $this->input->post('id_del_comentario');

                       $this->load->model('model_principal');
                        $this->model_principal->updateComentarioDesdeEditar($data,$id_comentario);
                        redirect('controlador_principal/editarUsuario/'.$id_usuario);

                }
                 //trae el comentario del id asociado
                 $this->load->model('model_principal');
                $info['infoComentariosYFecha'] =$this->model_principal->listarComentarioDesdeEditar($id);





                $this->load->view('templates/header.php');
                $this->load->view('templates/aside.php');
                $this->load->view('view_editarComentarioDesdeEditar',$info);
                $this->load->view('templates/footer.php');




         }





}
