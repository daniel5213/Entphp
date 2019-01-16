<?php

class Usuario extends CI_Controller
{

    public function crear()
    {
               frame($this, 'usuario/crear');
    }

    public function crearPost()
    {
        $email = isset($_POST['email']) && ! empty($_POST['email']) ? $_POST['email'] : null;
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) && ! empty($_POST['pwd']) ? $_POST['pwd'] : null;
        if ($nombre != null && $pwd != null && $email != null) {
            $this->load->model('usuario_model');
            $ok = $this->usuario_model->crear($email,$nombre, $pwd);
            if($ok){
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'usuario/crearOK');
        }else{
            $data['nombre'] = $nombre;
            
            frame($this, 'usuario/crearERROR',$data);
        }
        }else{
            $data['nombre'] = $nombre;
            
            frame($this, 'usuario/crearERROR',$data);
        }
    }
    
    

    public function comprobarUsuario()
    {
        
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) && ! empty($_POST['pwd']) ? $_POST['pwd'] : null;
        
        if ($nombre != null && $pwd != null) {
            $this->load->model('usuario_model');
            $data=[];
            $sentencia=$this->usuario_model->ejecutarsentencia($nombre, $pwd);
            $data['sentencia'] = $sentencia;
            
                frame($this, 'usuario/home',$data);
                
            
        }else {
            frame($this, 'usuario/crearERROR');
        }
    }
    
        function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('usuario_model');
            $this->usuario_model->delete($id);
            redirect(base_url() . 'usuario/listar');
        }
    }

}
?>