<?php
class Ejerciciodos extends CI_Controller{
    function saludar() {
        $this->load->model('ejercicio2modcode');
        $datos['lp']=$this->ejercicio2modcode->leer();
        $this->load->view('ejercicio2/saludar',$datos);
        
    }
    function index() {
        $this->saludar();
    }
}