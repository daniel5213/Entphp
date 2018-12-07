<?php

class coche extends CI_Controller
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
                $data['marca'] = $marca;
                frame($this, 'coche/crearOK', $data);
            } else {
                $data['marca'] = $marca;
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
        $matricula = (isset($_POST['matricula']) && ! empty($_POST['matricula'])) ? $_POST['matricula'] : null;
        if ($matricula != null) {
            $this->load->model('coche_model');
            $coche = $this->coche_model->getcocheBymatricula($matricula);
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
        
        $matricula = isset($_POST['matricula']) && ! empty($_POST['matricula']) ? $_POST['matricula'] : null;
        
        if ($matricula != null && $matricula_nuevo != null && $marca_nuevo != null && $modelo_nuevo != null) {
            $this->load->model('coche_model');
            $ok = $this->coche_model->update($matricula, $matricula_nuevo, $marca_nuevo, $modelo_nuevo);
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
        $matricula = isset($_POST['matricula']) && ! empty($_POST['matricula']) ? $_POST['matricula'] : null;
        if ($matricula != null) {
            $this->load->model('coche_model');
            $this->coche_model->delete($matricula);
            redirect(base_url() . 'coche/listar');
        }
    }
}

?>