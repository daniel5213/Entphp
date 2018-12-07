<?php
class Pais_model extends CI_Model{
    
    public function crear($nombre){
        $ok = false;
        $bean=R::findOne('paises','nombre=?',[$nombre]);
        $ok($bean == null);
        if($ok){
        $pais=R::dispense('paises');
        $pais->nombre=nombre;
        R::store('pais');
        }
        return $ok;
    }
}