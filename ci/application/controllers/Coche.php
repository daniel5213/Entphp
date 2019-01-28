<?php

class Coche extends CI_Controller
{

    public function crear()
    {
        frame($this, 'coche/crear');
    }

    public function crearPost()
    {
        $matricula = isset($_POST['matricula']) && ! empty($_POST['matricula']) ? $_POST['matricula'] : null;
        $marca = isset($_POST['marca']) && ! empty($_POST['marca']) ? $_POST['marca'] : null;
        $modelo = isset($_POST['modelo']) && ! empty($_POST['modelo']) ? $_POST['modelo'] : null;
        
        if ($matricula!= null && $marca != null && $modelo!=null) {
            $this->load->model('coche_model');
            $ok = $this->coche_model->crear($matricula,$marca,$modelo);
            if ($ok) {
                $data=[];
                $data['matricula'] = $matricula;
                frame($this, 'coche/crearOK', $data);
            } else {
                $data['matricula'] = $matricula;
                frame($this, 'coche/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('coche_model');
        $coches = $this->coche_model->listar();
        $data=[];
        $data['coches'] = $coches;
        frame($this, 'coche/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('coche_model');
            $coche = $this->coche_model->getCocheById($id);
            $data=[];
            $data['coche'] = $coche;
            frame($this, 'coche/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $matricula_nuevo = isset($_POST['matricula']) && ! empty($_POST['matricula']) ? $_POST['matricula'] : null;
        $marca_nuevo = isset($_POST['marca']) && ! empty($_POST['marca']) ? $_POST['marca'] : null;
        $modelo_nuevo = isset($_POST['modelo']) && ! empty($_POST['modelo']) ? $_POST['modelo'] : null;
        
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $matricula_nuevo != null && $marca_nuevo != null && $modelo_nuevo != null) {
            $this->load->model('coche_model');
            $ok = $this->coche_model->update($id, $matricula_nuevo, $marca_nuevo, $modelo_nuevo);
            if ($ok) {
                redirect(base_url() . 'coche/listar');
            } else {
               frame($this, 'coche/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('coche_model');
            $this->coche_model->delete($id);
            redirect(base_url() . 'coche/listar');
        }
    }
}

?>