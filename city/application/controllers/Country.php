<?php

class country extends CI_Controller
{

    public function crear()
    {
        /*$this->load->model('pais_model');
        
        $data['paises'] = $this->pais_model->listar();
        */
        
        frame($this, 'country/crear');
    }

    public function crearPost()
    {
        
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
       // $pais_id = isset($_POST['pais']) && ! empty($_POST['pais']) ? $_POST['pais'] : null;
        
        if ($name != null) {
            $this->load->model('country_model');
            $ok = $this->country_model->crear($name);
            if ($ok) {
                redirect(base_url()."country/listar");
            } else {
                $data=[];
                $data['name'] = $name;
                frame($this, 'country/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('country_model');
        $data['contries'] = $this->country_model->listar();
        
        frame($this, 'country/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('country_model');
            $this->load->model('pais_model');
            $this->load->model('coche_model');
            $this->load->model('aficion_model');
            $data['country'] = $this->country_model->getcountryById($id);
            $data['paises'] = $this->pais_model->listar();
            $data['coches_disponibles'] = $this->coche_model->coches_disponibles();
            $data['aficiones'] = $this->aficion_model->listar();
            frame($this, 'country/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $dni_nuevo = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $name_nuevo = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $apellido_nuevo = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
        $estatura_nuevo = isset($_POST['estatura']) && ! empty($_POST['estatura']) ? $_POST['estatura'] : null;
        $fnac_nuevo = isset($_POST['fnac']) && ! empty($_POST['fnac']) ? $_POST['fnac'] : null;
        $id_pais_nuevo= isset($_POST['pais']) && ! empty($_POST['pais']) ? $_POST['pais'] : null;
        $id_coches_despues = isset($_POST['coche'])  ? $_POST['coche'] : [] ;
        $id_aficiones_despues = isset($_POST['aficion'])  ? $_POST['aficion'] : [] ;
        
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $dni_nuevo != null && $name_nuevo != null && $apellido_nuevo != null) {
            $this->load->model('country_model');
            $ok = $this->country_model->update($id, $dni_nuevo, $name_nuevo, $apellido_nuevo,$estatura_nuevo,$fnac_nuevo, $id_pais_nuevo,$id_coches_despues,$id_aficiones_despues);
            if ($ok) {
                redirect(base_url() . 'country/listar');
            } else {
               frame($this, 'country/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('country_model');
            $this->country_model->delete($id);
            redirect(base_url() . 'country/listar');
        }
    }
}

?>