<?php
class Pais extends CI_Controller{
    public function crear(){
        frame($this,'pais/crear');        
    }
    
    public function crearPost(){
        $nombre=isset($_POST['nombre']) && !empty($_POST['nombre'])?$_POST['nombre']:null;
        if($nombre !=null){
        $this->load->model('pais_model');
        $ok=$this->Pais_model->crear($nombre);
        if($ok){
            frame($this,'pais/paisok');
        }
    }
    else{
      //mensaje incorrecto  
    }}
    
    public function listar(){
        $this->load->model('pais/listar');
    }
}