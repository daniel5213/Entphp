<?php

class Coche_model extends CI_Model
{

    public function crear($matricula,$marca,$modelo)
    {
        $ok = false;
        
        $bean = R::findOne('coche','matricula=?',[$matricula]);
        $ok = ($bean == null);
        
        if ($ok) {
            $coche = R::dispense('coche');
            $coche->matricula= $matricula;
            $coche->marca = $marca;
            $coche->modelo= $modelo;
            R::store($coche);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('coche');
    }

    
    public function coches_disponibles() {
       return R::find('coche','poseecoche_id is null');
        
    }
    
    public function getCocheById($id) {
        return R::findOne('coche','id=?',[$id]);
    }

    
    public function update($id,$matricula_nuevo, $marca_nuevo,$modelo_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('coche','id=?',[$id]);
        $coche_error = R::findOne('coche','matricula=? and id<>?',[$matricula_nuevo,$id]);
        $ok = ($bean != null && $coche_error == null);
        
        if ($ok) {
            $coche = R::load('coche',$id);
            $coche->matricula= $matricula_nuevo;
            $coche->marca = $marca_nuevo;
            $coche->modelo = $modelo_nuevo;
            R::store($coche);
        }
        return $ok;
    }
    
    public function delete($id) {
        $coche = R::load('coche',$id);
        R::trash($coche);
    }
}