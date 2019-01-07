<?php
class Home extends CI_Controller {
    public function presentacion() {
        frame($this,'todo/todo');
    }
   
    public function index() {
        $this->presentacion();
    }
}
?>