<?php

class Coche_model extends CI_Model
{

    public function crear($matricula,$marca,$modelo)
    {
        $ok = false;
        
        $bean = R::findOne('coches','matricula=?',[$matricula]);
        $ok = ($bean == null);
        
        if ($ok) {
            $coche = R::dispense('coches');
            $coche->matricula= $matricula;
            $coche->marca = $marca;
            $coche->modelo= $modelo;
            R::store($coche);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('coches');
    }
    
    public function coches_disponibles() {
        return R::find('coches','poseecoche_id is null ');
    }

    public function getCocheById($id) {
        return R::findOne('coches','id=?',[$id]);
    }

    
    public function update($id,$matricula_nuevo, $marca_nuevo,$modelo_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('coches','id=?',[$id]);
        $ok = ($bean != null);
        
        if ($ok) {
            $coche = R::load('coches',$id);
            $coche->matricula= $matricula_nuevo;
            $coche->marca = $marca_nuevo;
            $coche->modelo = $modelo_nuevo;
            R::store($coche);
        }
        return $ok;
    }
    
    
    
    public function delete($id) {
        $coche = R::load('coches',$id);
        R::trash($coche);
    }
}