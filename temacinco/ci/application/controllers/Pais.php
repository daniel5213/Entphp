<?php
class Pais extends CI_Controller {
    function listar() {
        $this->load->model('pais_model');
        $datos['lp'] = $this->pais_model->listarTodosPaises();
        $this->load->view('pais/listar',$datos);
    }
    
    function crear() {
        /*$this->load->model('pais_model');
        $datos['lp'] = $this->pais_model->listarTodosPaises();*/
        $this->load->view('pais/listar',$datos);
    }
    
    function index() {
        $this->listar();
    }
}
?>