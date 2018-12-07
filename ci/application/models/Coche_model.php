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

    public function getcochesById($matricula) {
        return R::findOne('coches','id=?',[$matricula]);
    }

    
    public function update($matricula,$matricula_nuevo, $marca_nuevo,$modelo_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('coches','id=?',[$matricula]);
        $ok = ($bean != null);
        
        if ($ok) {
            $coche = R::load('coches',$matricula);
            $coche->matricula= $matricula_nuevo;
            $coche->marca = $marca_nuevo;
            $coche->modelo = $modelo_nuevo;
            R::store($coche);
        }
        return $ok;
    }
    
    public function delete($matricula) {
        $coche = R::load('coches',$matricula);
        R::trash($coche);
    }
}