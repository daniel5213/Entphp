<?php
class Home extends CI_Controller {
    public function presentacion() {

        $this->load->view('home/presentacion');
    }
    public function index() {
        $this->presentacion();
    }
}
?>