<?php

class Persona_model extends CI_Model
{

    public function crear($dni,$nombre,$apellido)
    {
        $ok = false;
        
        $bean = R::findOne('persona','dni=?',[$dni]);
        $ok = ($bean == null);
        
        if ($ok) {
            $persona = R::dispense('persona');
            $persona->dni= $dni;
            $persona->nombre = $nombre;
            $persona->apellido= $apellido;
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

    
    public function update($id,$dni_nuevo, $nombre_nuevo,$apellido_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('persona','id=?',[$id]);
        $ok = ($bean != null);
        
        if ($ok) {
            $persona = R::load('persona',$id);
            $persona->dni= $dni_nuevo;
            $persona->nombre = $nombre_nuevo;
            $persona->apellido = $apellido_nuevo;
            R::store($persona);
        }
        return $ok;
    }
    
    public function delete($id) {
        $persona = R::load('persona',$id);
        R::trash($persona);
    }
}