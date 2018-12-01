<?php
class Pais_model extends CI_Model {
    /*
    function listarTodosPaises() {
        $this->load->database();
        $lista_paises = $this->db->get('pais')->result();
        return $lista_paises;
    }
    */
    function listarTodosPaises() {
        return R::findAll('pais');
    }
        
    
}
?>