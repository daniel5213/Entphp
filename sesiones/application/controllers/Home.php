<?php

class Home extends CI_Controller
{

    
    public function presentacion()
    {
        frame($this, 'home/login');
    }

    public function adios()
    {
        frame($this, 'home/adios');
    }

    public function index()
    {
        $this->presentacion();
    }
}
?>