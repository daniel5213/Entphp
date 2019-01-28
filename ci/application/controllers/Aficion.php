<?php

class Aficion extends CI_Controller
{

    public function crear()
    {
        frame($this, 'aficion/crear');
    }

    public function crearPost()
    {
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        if ($nombre != null) {
            $this->load->model('aficion_model');
            $ok = $this->aficion_model->crear($nombre);
            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'aficion/crearOK', $data);
            } else {
                $data['nombre'] = $nombre;
                frame($this, 'aficion/crearERROR', $data);
            }
        } else {
            $data['nombre'] = 'desconocida';
            frame($this, 'aficion/crearERROR', $data);
        }
    }

    public function listar()
    {
        $data=[];
        $this->load->model('aficion_model');
        //$this->load->model('persona_model');
        $aficiones = $this->aficion_model->listar();
        $data['personasxAficion']=$this->aficion_model->getPersonasxAficion();
        $data['estaturas']= $this->aficion_model->getEstaturamedia();
        $data['edadesMedias']=$this->aficion_model->getEdadmedia();
        
        $data['aficiones'] = $aficiones;
        
       // $data['estaturas'] = $estaturamedia;
        frame($this, 'aficion/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('aficion_model');
            $aficion = $this->aficion_model->getAficionById($id);
            $estaturamedia = $this->aficion_model->getEstaturamedia();
            $data=[];
            $data['aficion'] = $aficion;
            $data['estaturamedia'] = $estaturamedia;
            frame($this, 'aficion/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $nombre_nuevo = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $nombre_nuevo != null) {
            $this->load->model('aficion_model');
            $ok = $this->aficion_model->update($id, $nombre_nuevo);
            if ($ok) {
                redirect(base_url() . 'aficion/listar');
            } else {
               frame($this, 'aficion/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('aficion_model');
            $this->aficion_model->delete($id);
            redirect(base_url() . 'aficion/listar');
        }
    }
}

?>