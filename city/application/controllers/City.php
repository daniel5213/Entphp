<?php

class City extends CI_Controller
{

    public function crear()
    {   
        $this->load->model('country_model');
        $data['countries'] = $this->country_model->listar();
        frame($this, 'city/crear',$data);
    }

    public function crearPost()
    {
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $country_id = isset($_POST['country']) && ! empty($_POST['country']) ? $_POST['country'] : null;
        if ($name != null&&$country_id!=null) {
            $this->load->model('city_model');
            $ok = $this->city_model->crear($name,$country_id);
            if ($ok) {
                
                redirect(base_url()."city/listar");
                
            } else {
                $data=[];
                $data['name'] = $name;
                frame($this, 'city/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function listar()
    {
        $this->load->model('city_model');
        $data=[];
        $data['cities'] = $this->city_model->listar();
        
        
        
        frame($this, 'city/listar', $data);
    }

    public function update()
    {
        $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('city_model');
            $city = $this->city_model->getcityById($id);
            $data=[];
            $data['city'] = $city;
            frame($this, 'city/update', $data);
        } else {
            redirect(base_url());
        }
    }

    public function updatePost()
    {
        $name_nuevo = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

        if ($id != null && $name_nuevo != null) {
            $this->load->model('city_model');
            $ok = $this->city_model->update($id, $name_nuevo);
            if ($ok) {
                redirect(base_url() . 'city/listar');
            } else {
               frame($this, 'city/updateERROR');
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function delete() {
        $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
        if ($id != null) {
            $this->load->model('city_model');
            $this->city_model->delete($id);
            redirect(base_url() . 'city/listar');
        }
    }
}

?>