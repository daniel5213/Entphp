<?php
class persona extends CI_Controller{
    public function crear(){
        frame($this,'persona/crear');        
    }
    
    public function crearPost(){
        $dni=isset($_POST['dni']) && !empty($_POST['dni'])?$_POST['dni']:null;
        $nombre=isset($_POST['nombre']) && !empty($_POST['nombre'])?$_POST['nombre']:null;
        $apellido=isset($_POST['apellido']) && !empty($_POST['apellido'])?$_POST['apellido']:null;
        if($nombre !=null){
        $this->load->model('persona_model');
        $ok=$this->persona_model->crear($dni,$nombre,apellido);
        if($ok){
            frame($this,'persona/personaok');
        }
    }
    else{
      //mensaje incorrecto  
    }}
    
    public function listar(){
        $this->load->model('persona/listar');
    }
}