<?php

class Persona extends CI_Controller
{

    public function crear()
    {
        frame($this, 'persona/crear');
    }

    public function crearPost()
    {
        $dni = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
        
        if ($dni!= null && $nombre != null && $apellido!=null) {
            $this->load->model('persona_model');
            $ok = $this->persona_model->crear($dni,$nombre,$apellido);
            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'persona/crearOK', $data);
            } else {
                $data['nombre'] = $nombre;
                frame($this, 'persona/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('persona_model');
        $personas = $this->persona_model->listar();
        $data=[];
        $data['personas'] = $personas;
        frame($this, 'persona/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('persona_model');
            $persona = $this->persona_model->getPersonaById($id);
            $data=[];
            $data['persona'] = $persona;
            frame($this, 'persona/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $dni_nuevo = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $nombre_nuevo = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido_nuevo = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
        
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $dni_nuevo != null && $nombre_nuevo != null && $apellido_nuevo != null) {
            $this->load->model('persona_model');
            $ok = $this->persona_model->update($id, $dni_nuevo, $nombre_nuevo, $apellido_nuevo);
            if ($ok) {
                redirect(base_url() . 'persona/listar');
            } else {
               frame($this, 'persona/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('persona_model');
            $this->persona_model->delete($id);
            redirect(base_url() . 'persona/listar');
        }
    }
}

?>