<?php

class Persona extends CI_Controller
{

    public function crear()
    {
        $this->load->model('pais_model');
        $this->load->model('coche_model');
        $this->load->model('aficion_model');
        $data['paises'] = $this->pais_model->listar();
        $data['coches'] = $this->coche_model->coches_disponibles();
        $data['aficiones'] = $this->aficion_model->listar();
        frame($this, 'persona/crear',$data);
    }

    public function crearPost()
    {
        $dni = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
        $estatura = isset($_POST['estatura']) && ! empty($_POST['estatura']) ? $_POST['estatura'] : null;
        $fnac = isset($_POST['fnac']) && ! empty($_POST['fnac']) ? $_POST['fnac'] : null;
        $pais_id = isset($_POST['pais']) && ! empty($_POST['pais']) ? $_POST['pais'] : null;
        $coches_id = isset($_POST['coche']) ? $_POST['coche'] : [];
        $aficiones_id = isset($_POST['aficion']) ? $_POST['aficion'] : [];
        
        if ($dni!= null && $nombre != null && $apellido!=null && $pais_id!=null ) {
            $this->load->model('persona_model');
            $ok = $this->persona_model->crear($dni,$nombre,$apellido,$estatura,$fnac,$pais_id,$coches_id,$aficiones_id);
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
        $data['personas'] = $this->persona_model->listar();
        $data['edad'] = $this->persona_model->getEdades();
        frame($this, 'persona/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('persona_model');
            $this->load->model('pais_model');
            $this->load->model('coche_model');
            $this->load->model('aficion_model');
            $data['persona'] = $this->persona_model->getPersonaById($id);
            $data['paises'] = $this->pais_model->listar();
            $data['coches_disponibles'] = $this->coche_model->coches_disponibles();
            $data['aficiones'] = $this->aficion_model->listar();
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
        $estatura_nuevo = isset($_POST['estatura']) && ! empty($_POST['estatura']) ? $_POST['estatura'] : null;
        $fnac_nuevo = isset($_POST['fnac']) && ! empty($_POST['fnac']) ? $_POST['fnac'] : null;
        $id_pais_nuevo= isset($_POST['pais']) && ! empty($_POST['pais']) ? $_POST['pais'] : null;
        $id_coches_despues = isset($_POST['coche'])  ? $_POST['coche'] : [] ;
        $id_aficiones_despues = isset($_POST['aficion'])  ? $_POST['aficion'] : [] ;
        
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $dni_nuevo != null && $nombre_nuevo != null && $apellido_nuevo != null) {
            $this->load->model('persona_model');
            $ok = $this->persona_model->update($id, $dni_nuevo, $nombre_nuevo, $apellido_nuevo,$estatura_nuevo,$fnac_nuevo, $id_pais_nuevo,$id_coches_despues,$id_aficiones_despues);
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