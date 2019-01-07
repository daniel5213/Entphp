<?php

class Pais_model extends CI_Model
{

    public function crear($nombre)
    {
        $ok = false;
        
        $bean = R::findOne('pais','nombre=?',[$nombre]);
        $ok = ($bean == null);
        
        if ($ok) {
            $pais = R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('pais');
    }

    public function getPaisById($id) {
        return R::findOne('pais','id=?',[$id]);
    }

    
    public function update($id,$nombre_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('pais','id=?',[$id]);
        $ok = ($bean != null);
        
        if ($ok) {
            $pais = R::load('pais',$id);
            $pais->nombre = $nombre_nuevo;
            R::store($pais);
        }
        return $ok;
    }
    
    public function delete($id) {
        $pais = R::load('pais',$id);
        R::trash($pais);
    }
}