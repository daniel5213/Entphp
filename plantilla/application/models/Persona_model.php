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

    
    public function update($id,$dni_nuevo, $nombre_nuevo,$apellido_nuevo,$pais_id)
    {
        $ok = false;
        
        $bean = R::findOne('persona','id=?',[$id]);
        $ok = ($bean != null);
        
        if ($ok) {
            $persona = R::load('persona',$id);
            $persona->dni= $dni_nuevo;
            $persona->nombre = $nombre_nuevo;
            $persona->apellido = $apellido_nuevo;
            $persona->nace=R::load('pais',$pais_id);
            R::store($persona);
        }
        return $ok;
    }
    
    public function delete($id) {
        $persona = R::load('persona',$id);
        R::trash($persona);
    }
}