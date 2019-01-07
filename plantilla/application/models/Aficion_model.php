<?php

class aficion_model extends CI_Model
{

    public function crear($nombre)
    {
        
        
        
        $ok = false;
        
        $bean = R::findOne('aficion','nombre=?',[$nombre]);
        $ok = ($bean == null);
        
        if ($ok) {
            $aficion = R::dispense('aficion');
            $aficion->nombre= $nombre;
            
            R::store($aficion);
        }
        return $ok;
        
        
    }

    public function listar() {
        return R::findAll('aficion');
    }

    public function getaficionById($id) {
        return R::findOne('aficion','id=?',[$id]);
    }

    
    public function update($id, $nombre_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('aficion','id=?',[$id]);
        $ok = ($bean != null);
        
        if ($ok) {
            $aficion = R::load('aficion',$id);
            
            $aficion->nombre = $nombre_nuevo;
            
            R::store($aficion);
        }
        return $ok;
    }
    
    public function delete($id) {
        $aficion = R::load('aficion',$id);
        R::trash($aficion);
    }
}