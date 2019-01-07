<?php

class Pais extends CI_Controller
{

    public function crear()
    {
        frame($this, 'pais/crear');
    }

    public function crearPost()
    {
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        if ($nombre != null) {
            $this->load->model('pais_model');
            $ok = $this->pais_model->crear($nombre);
            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'pais/crearOK', $data);
            } else {
                $data['nombre'] = $nombre;
                frame($this, 'pais/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('pais_model');
        $paises = $this->pais_model->listar();
        $data=[];
        $data['paises'] = $paises;
        frame($this, 'pais/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('pais_model');
            $pais = $this->pais_model->getPaisById($id);
            $data=[];
            $data['pais'] = $pais;
            frame($this, 'pais/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $nombre_nuevo = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $nombre_nuevo != null) {
            $this->load->model('pais_model');
            $ok = $this->pais_model->update($id, $nombre_nuevo);
            if ($ok) {
                redirect(base_url() . 'pais/listar');
            } else {
               frame($this, 'pais/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('pais_model');
            $this->pais_model->delete($id);
            redirect(base_url() . 'pais/listar');
        }
    }
}

?>