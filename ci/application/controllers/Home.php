<?php
class Home extends CI_Controller {
    
   
    
    public function presentacion() {
        $datos['nombre'] = isset($_GET['nombre'])?$_GET['nombre']:'Daniel Alvarez';
       
       frame($this,'home/presentacion',$datos);
    }
    public function adios() {
        frame($this,'home/adios');
    }
    public function index() {
        $this->presentacion();
    }
}
?>