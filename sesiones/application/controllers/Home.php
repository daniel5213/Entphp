<?php

class Home extends CI_Controller
{

    public function crear()
    {
        frame($this, 'home/crear');
    }

    public function crearPost()
    {
        $email = isset($_POST['email']) && ! empty($_POST['email']) ? $_POST['email'] : null;
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) && ! empty($_POST['pwd']) ? $_POST['pwd'] : null;
        if ($nombre != null && $pwd != null && $email != null) {
            $this->load->model('home_model');
            $ok = $this->home_model->iniciosesion($nombre, $pwd);
            frame($this, 'home/crearOK');
        }else{
            frame($this, 'home/crearERROR');
        }
    }

    public function comprobarUsuario()
    {
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) && ! empty($_POST['pwd']) ? $_POST['pwd'] : null;
            
        if ($nombre != null && $pwd != null) {
            $this->load->model('home_model');
            $ok = $this->home_model->iniciosesion($nombre, $pwd);

            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'home/presentacion',$data);
                
            } else {
                frame($this, 'home/login');
            }
        }
    }

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