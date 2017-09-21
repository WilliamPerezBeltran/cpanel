<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_principal extends CI_Model {

        public function get_estudios(){
                $this->load->database();
                $query=$this->db->get('estudios');
                return $query->result_array();
        }

        public function get_cargo(){
                $this->load->database();
                $query=$this->db->get('cargo');
                return $query->result_array();
        }
        public function get_localidad(){
                $this->load->database();
                $query=$this->db->get('localidad');
                return $query->result_array();
        }

         public function get_ciudad(){
                $this->load->database();
                $query=$this->db->get('ciudades');
                return $query->result_array();
        }

        public function crearUsuario($data){
                $this->load->database();
                $this->db->insert('datos_hoja_de_vida',$data);
        }

        public function getInformacionUsuario(){
                $this->load->database();
                $this->db->select('datos_hoja_de_vida.ID as info_ID');
        $this->db->select('datos_hoja_de_vida.Nombre as info_Nombre');
        $this->db->select('datos_hoja_de_vida.Genero as info_Genero');
        $this->db->select('datos_hoja_de_vida.Email as info_Email');
        $this->db->select('datos_hoja_de_vida.Celular as info_Celular');
        $this->db->select('datos_hoja_de_vida.hojaDeVida as info_hojaDeVida');
        $this->db->select('datos_hoja_de_vida.foto as info_foto');
        $this->db->select('datos_hoja_de_vida.Cedula as info_Cedula');
        $this->db->select('datos_hoja_de_vida.Edad as info_Edad');
        $this->db->select('datos_hoja_de_vida.idEstudios as info_idEstudios');
        $this->db->select('datos_hoja_de_vida.idCargoSolicitado as info_idCargoSolicitado');
        $this->db->select('datos_hoja_de_vida.Ciudad as info_Ciudad');
        $this->db->select('datos_hoja_de_vida.idLocalidadBogota as info_idLocalidadBogota');
        $this->db->select('datos_hoja_de_vida.Moto as info_Moto');
        $this->db->select('datos_hoja_de_vida.casa as info_casa');
        $this->db->select('datos_hoja_de_vida.proceso    as info_proceso');
        $this->db->select('datos_hoja_de_vida.estadoCivil as info_estadoCivil');


        $this->db->select('ciudades.ID as Ciudad');
        $this->db->select('ciudades.valorCiudad as nombreCiudad');

        $this->db->select('estudios.ID as idEstudios');
        $this->db->select('estudios.tipoDeEstudio as nombreEstudios');

        $this->db->select('cargo.ID as idCargoSolicitado');
        $this->db->select('cargo.cargoSolicitado as CargoSolicitado');

        $this->db->select('localidad.ID as idLocalidadBogota');
        $this->db->select('localidad.localidadBogota as LocalidadBogota');



        $this->db->join('ciudades', 'ciudades.ID = datos_hoja_de_vida.Ciudad');
        $this->db->join('estudios', 'estudios.ID = datos_hoja_de_vida.idEstudios');
        $this->db->join('cargo', 'cargo.ID = datos_hoja_de_vida.idCargoSolicitado');
        $this->db->join('localidad', 'localidad.ID = datos_hoja_de_vida.idLocalidadBogota');
        $this->db->where('estado',1);//solo me va traer los id que tiene estado 1(es decir: los activos )
                $query=$this->db->get('datos_hoja_de_vida');
                return $query->result_array();
        }
        public function getInformacionUsuarioDesactivados(){
                $this->load->database();
                $this->db->select('datos_hoja_de_vida.ID as info_ID');
        $this->db->select('datos_hoja_de_vida.Nombre as info_Nombre');
        $this->db->select('datos_hoja_de_vida.Genero as info_Genero');
        $this->db->select('datos_hoja_de_vida.Email as info_Email');
        $this->db->select('datos_hoja_de_vida.Celular as info_Celular');
        $this->db->select('datos_hoja_de_vida.hojaDeVida as info_hojaDeVida');
        $this->db->select('datos_hoja_de_vida.foto as info_foto');
        $this->db->select('datos_hoja_de_vida.Cedula as info_Cedula');
        $this->db->select('datos_hoja_de_vida.Edad as info_Edad');
        $this->db->select('datos_hoja_de_vida.idEstudios as info_idEstudios');
        $this->db->select('datos_hoja_de_vida.idCargoSolicitado as info_idCargoSolicitado');
        $this->db->select('datos_hoja_de_vida.Ciudad as info_Ciudad');
        $this->db->select('datos_hoja_de_vida.idLocalidadBogota as info_idLocalidadBogota');
        $this->db->select('datos_hoja_de_vida.Moto as info_Moto');
        $this->db->select('datos_hoja_de_vida.casa as info_casa');
        $this->db->select('datos_hoja_de_vida.proceso    as info_proceso');
        $this->db->select('datos_hoja_de_vida.estadoCivil as info_estadoCivil');


        $this->db->select('ciudades.ID as Ciudad');
        $this->db->select('ciudades.valorCiudad as nombreCiudad');

        $this->db->select('estudios.ID as idEstudios');
        $this->db->select('estudios.tipoDeEstudio as nombreEstudios');

        $this->db->select('cargo.ID as idCargoSolicitado');
        $this->db->select('cargo.cargoSolicitado as CargoSolicitado');

        $this->db->select('localidad.ID as idLocalidadBogota');
        $this->db->select('localidad.localidadBogota as LocalidadBogota');



        $this->db->join('ciudades', 'ciudades.ID = datos_hoja_de_vida.Ciudad');
        $this->db->join('estudios', 'estudios.ID = datos_hoja_de_vida.idEstudios');
        $this->db->join('cargo', 'cargo.ID = datos_hoja_de_vida.idCargoSolicitado');
        $this->db->join('localidad', 'localidad.ID = datos_hoja_de_vida.idLocalidadBogota');
        $this->db->where('estado',0);//solo me va traer los id que tiene estado 0(es decir: los no activos (eliminados))
                $query=$this->db->get('datos_hoja_de_vida');
                return $query->result_array();
        }

        public function desactivarUsuario($data,$id){
                $this->load->database();
                $this->db->update('datos_hoja_de_vida',$data, "ID =".$id);

        }

        public function consultarInfoUsuario($id){
                $this->load->database();
                $this->db->where('ID',$id);
                $query=$this->db->get('datos_hoja_de_vida');


                return $query->row_array();
        }

        public function editarUsuario($data, $id){
                $this->load->database();
                $this->db->update('datos_hoja_de_vida',$data, "ID =".$id);

        }

        public function buscarInfoUsuario($informacionIngresada){
             
                $this->load->database();


                if(!empty($informacionIngresada['infoGeneral'])){
                    $this->db->like('Nombre', $informacionIngresada["infoGeneral"]);
                    
                }

                 if(!empty($informacionIngresada['Ciudad'])){
                    $this->db->where('Ciudad', $informacionIngresada['Ciudad']);
                    
                }

                if(!empty($informacionIngresada['idLocalidadBogota'])){
                    $this->db->where('idLocalidadBogota', $informacionIngresada['idLocalidadBogota']);
                    
                }

                if(!empty($informacionIngresada['idCargoSolicitado'])){
                    $this->db->where('idCargoSolicitado', $informacionIngresada['idCargoSolicitado']);
                    
                }
                //===========
                if(!empty($informacionIngresada['Genero'])){
                    $this->db->where('Genero', $informacionIngresada['Genero']);
                    
                }
                if(!empty($informacionIngresada['Email'])){
                    $this->db->where('Email', $informacionIngresada['Email']);
                    
                }
                if(!empty($informacionIngresada['Celular'])){
                    $this->db->where('Celular', $informacionIngresada['Celular']);
                    
                }
                if(!empty($informacionIngresada['Cedula'])){
                    $this->db->where('Cedula', $informacionIngresada['Cedula']);
                    
                }
                if(!empty($informacionIngresada['Edad'])){
                    $this->db->where('Edad', $informacionIngresada['Edad']);
                    
                }
                if(!empty($informacionIngresada['idEstudios'])){
                    $this->db->where('idEstudios', $informacionIngresada['idEstudios']);
                    
                }
                if(!empty($informacionIngresada['Moto'])){
                    $this->db->where('Moto', $informacionIngresada['Moto']);
                    
                }
                if(!empty($informacionIngresada['casa'])){
                    $this->db->where('casa', $informacionIngresada['casa']);
                    
                }
                if(!empty($informacionIngresada['proceso'])){
                    $this->db->where('proceso', $informacionIngresada['proceso']);
                    
                }
                if(!empty($informacionIngresada['estadoCivil'])){
                    $this->db->where('estadoCivil', $informacionIngresada['estadoCivil']);
                    
                }




                 $this->db->select('datos_hoja_de_vida.ID as info_ID');
        $this->db->select('datos_hoja_de_vida.Nombre as info_Nombre');
        $this->db->select('datos_hoja_de_vida.Genero as info_Genero');
        $this->db->select('datos_hoja_de_vida.Email as info_Email');
        $this->db->select('datos_hoja_de_vida.Celular as info_Celular');
        $this->db->select('datos_hoja_de_vida.hojaDeVida as info_hojaDeVida');
        $this->db->select('datos_hoja_de_vida.foto as info_foto');
        $this->db->select('datos_hoja_de_vida.Cedula as info_Cedula');
        $this->db->select('datos_hoja_de_vida.Edad as info_Edad');
        $this->db->select('datos_hoja_de_vida.idEstudios as info_idEstudios');
        $this->db->select('datos_hoja_de_vida.idCargoSolicitado as info_idCargoSolicitado');



        //$this->db->select('datos_hoja_de_vida.Ciudad as info_Ciudad');



        $this->db->select('datos_hoja_de_vida.idLocalidadBogota as info_idLocalidadBogota');
        $this->db->select('datos_hoja_de_vida.Moto as info_Moto');
        $this->db->select('datos_hoja_de_vida.casa as info_casa');
        $this->db->select('datos_hoja_de_vida.proceso    as info_proceso');
        $this->db->select('datos_hoja_de_vida.estadoCivil as info_estadoCivil');




        $this->db->select('ciudades.ID as idCiudad');
        $this->db->select('ciudades.valorCiudad as ciudadAlias');

        $this->db->select('estudios.ID as idEstudios');
        $this->db->select('estudios.tipoDeEstudio as nombreEstudios');

        $this->db->select('cargo.ID as idCargoSolicitado');
        $this->db->select('cargo.cargoSolicitado as CargoSolicitado');

        $this->db->select('localidad.ID as idLocalidadBogota');
        $this->db->select('localidad.localidadBogota as LocalidadBogota');

        $this->db->join('ciudades', 'ciudades.ID = datos_hoja_de_vida.Ciudad');
        $this->db->join('estudios', 'estudios.ID = datos_hoja_de_vida.idEstudios');
        $this->db->join('cargo', 'cargo.ID = datos_hoja_de_vida.idCargoSolicitado');
        $this->db->join('localidad', 'localidad.ID = datos_hoja_de_vida.idLocalidadBogota');
                $query=$this->db->get('datos_hoja_de_vida');

                return $query->result_array();

        }
/*
        public function buscarCedula($cedula){
                $this->load->database();
                $this->db->where('Cedula',$cedula);
                $query=$this->db->get('datos_hoja_de_vida');
                return $query->row_array();

        }
*/
        public function consultarInfoUsuario1($id){
                $this->load->database();
                $this->db->select('datos_hoja_de_vida.ID as info_ID');
        $this->db->select('datos_hoja_de_vida.Nombre as info_Nombre');
        $this->db->select('datos_hoja_de_vida.Email as info_Email');
        $this->db->select('datos_hoja_de_vida.Celular as info_Celular');
        $this->db->select('datos_hoja_de_vida.hojaDeVida as info_hojaDeVida');
        $this->db->select('datos_hoja_de_vida.foto as info_foto');
        $this->db->select('datos_hoja_de_vida.Cedula as info_Cedula');
        $this->db->select('datos_hoja_de_vida.Edad as info_Edad');
        $this->db->select('datos_hoja_de_vida.idEstudios as info_idEstudios');
        $this->db->select('datos_hoja_de_vida.idCargoSolicitado as info_idCargoSolicitado');
        $this->db->select('datos_hoja_de_vida.Ciudad as info_Ciudad');
        $this->db->select('datos_hoja_de_vida.idLocalidadBogota as info_idLocalidadBogota');
        $this->db->select('datos_hoja_de_vida.Moto as info_Moto');
        $this->db->select('datos_hoja_de_vida.casa as info_casa');
        $this->db->select('datos_hoja_de_vida.proceso    as info_proceso');
        $this->db->select('datos_hoja_de_vida.estadoCivil as info_estadoCivil');

        $this->db->select('estudios.ID as idEstudios');
        $this->db->select('estudios.tipoDeEstudio as nombreEstudios');

        $this->db->select('cargo.ID as idCargoSolicitado');
        $this->db->select('cargo.cargoSolicitado as CargoSolicitado');

        $this->db->select('localidad.ID as idLocalidadBogota');
        $this->db->select('localidad.localidadBogota as LocalidadBogota');

        $this->db->join('estudios', 'estudios.ID = datos_hoja_de_vida.idEstudios');
        $this->db->join('cargo', 'cargo.ID = datos_hoja_de_vida.idCargoSolicitado');
        $this->db->join('localidad', 'localidad.ID = datos_hoja_de_vida.idLocalidadBogota');
                $this->db->where('datos_hoja_de_vida.ID',$id);
                $query=$this->db->get('datos_hoja_de_vida');


                return $query->row_array();
        }

        public function insertarcomentario($data){
                $this->load->database();
                $this->db->insert('comentarios',$data);
        }
        public function listarComentario($id){
                $this->load->database();
                $this->db->where('ID_usuario',$id);
                $query=$this->db->get('comentarios');
                return $query->result_array();

        }

        public function listarComentarioDesdeEditar($id){
                $this->load->database();
                $this->db->where('ID',$id);
                $query=$this->db->get('comentarios');
                return $query->row_array();

        }

        public function updateComentarioDesdeEditar($data,$id_comentario){
                
                $this->load->database();
                $this->db->update('comentarios',$data, "ID =".$id_comentario);


        }


}
