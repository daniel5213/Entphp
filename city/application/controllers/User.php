<?php

class User extends CI_Controller
{

    public function crear()
    {
        
        $this->load->model('city_model');
        $data=[];
        $data['cities'] = $this->city_model->listar();
        
        
        frame($this, 'user/crear', $data);
    }

    public function crearPost()
    {
        $dni = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $city_id = isset($_POST['city']) && ! empty($_POST['city']) ? $_POST['city'] : null;
        $travel_id = isset($_POST['travel']) ? $_POST['travel'] : [];
        if ($dni!= null && $name != null && $city_id!=null ) {
            $this->load->model('user_model');
            $ok = $this->user_model->crear($dni,$name,$city_id,$travel_id);
            if ($ok) {
                
                
                redirect(base_url()."user/listar");
            } else {
                $data=[];
                $data['name'] = $name;
                frame($this, 'user/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('user_model');
        
        $data=[];
        $data['users'] = $this->user_model->listar();
        
        frame($this, 'user/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('user_model');
            $this->load->model('city_model');
            $this->load->model('coche_model');
            $this->load->model('aficion_model');
            $data['user'] = $this->user_model->getuserById($id);
            $data['cityes'] = $this->city_model->listar();
            $data['coches_disponibles'] = $this->coche_model->coches_disponibles();
            $data['aficiones'] = $this->aficion_model->listar();
            frame($this, 'user/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $dni_nuevo = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $name_nuevo = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $id_city_nuevo= isset($_POST['city']) && ! empty($_POST['city']) ? $_POST['city'] : null;
        
        
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $dni_nuevo != null && $name_nuevo != null ) {
            $this->load->model('user_model');
            $ok = $this->user_model->update($id, $dni_nuevo, $name_nuevo, $id_city_nuevo);
            if ($ok) {
                redirect(base_url() . 'user/listar');
            } else {
               frame($this, 'user/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('user_model');
            $this->user_model->delete($id);
            redirect(base_url() . 'user/listar');
        }
    }
}

?>