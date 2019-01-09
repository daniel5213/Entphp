<?php

class Persona_model extends CI_Model
{

    public function crear($dni,$nombre,$apellido,$pais_id,$coches_id)
    {
        $ok = false;
        
        $bean = R::findOne('persona','dni=?',[$dni]);
        $ok = ($bean == null);
        
        //R::debug();
        if ($ok) {
            $persona = R::dispense('persona');
            $persona->dni= $dni;
            $persona->nombre = $nombre;
            $persona->apellido= $apellido;
            $persona->nace = R::load('pais',$pais_id);
            foreach ($coches_id as $coche_id) {
                $coche = R::load('coches',$coche_id);
                $coche->poseecoche = $persona;
                R::store($coche);
            }
            R::store($persona);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('persona');
    }

    public function getPersonaById($id) {
        return R::findOne('persona','id=?',[$id]);
    }

    
    public function update($id,$dni_nuevo, $nombre_nuevo,$apellido_nuevo, $id_pais_nuevo,$id_coches_despues)
    {
        $ok = false;
        
        $bean = R::findOne('persona','id=?',[$id]);
        $persona_error = R::findOne('persona','dni=? and id<>?',[$dni_nuevo,$id]);
        $ok = ($bean != null && $persona_error == null);
        
        if ($ok) {
            $persona = R::load('persona',$id);
            $persona->dni= $dni_nuevo;
            $persona->nombre = $nombre_nuevo;
            $persona->apellido = $apellido_nuevo;
            $persona->nace = R::load('pais',$id_pais_nuevo);
            R::store($persona);
        }
        
        foreach ($persona->alias('poseecoche')->ownCochesList as $coche) {
            $id = $coche->id;
            if ( ($key = array_search($id,$id_coches_despues)) !== false) { //  No hago nada
                unset($id_coches_despues[$key]);
            }
            else { // Borrar
                $coche->poseecoche = null;
                R::store($coche);
            }
        }
        
        foreach ($id_coches_despues as $id_add) {
            $coche = R::load('coches',$id_add);
            $coche->poseecoche = $persona;
            R::store($coche);
        }
        return $ok;
    }
    public function delete($id) {
        $persona = R::load('persona',$id);
        R::trash($persona);
    }
}