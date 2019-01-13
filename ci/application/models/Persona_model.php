<?php

class Persona_model extends CI_Model
{

    public function crear($dni,$nombre,$apellido,$estatura,$fnac,$pais_id,$coches_id,$aficiones_id)
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
            $persona->estatura= $estatura;
            $persona->fnac= $fnac;
            $edad=R::getAll("SELECT TIMESTAMPDIFF(YEAR,FechaNac,CURDATE()) AS edad
                FROM clientes;")
            
            
            $persona->nace = R::load('pais',$pais_id);
            
            foreach ($coches_id as $coche_id) {
                $coche = R::load('coches',$coche_id);
                $coche->poseecoche = $persona;
                R::store($coche);
            }
            foreach ($aficiones_id as $aficion_id) {
                $aficion = R::load('aficion',$aficion_id);
                $practica = R::dispense('gustos');
                $practica->persona = $persona;
                $practica->aficion = $aficion;
                R::store($practica);
            }
            R::store($persona);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('persona');
    }
    
   /* function calcularedad($fnac) {
        
        return R::load('persona','TIMESTAMPDIFF(YEAR,$fnac,CURDATE())');;
    }*/

    public function getPersonaById($id) {
        return R::findOne('persona','id=?',[$id]);
    }

    
    public function update($id,$dni_nuevo, $nombre_nuevo,$apellido_nuevo,$estatura_nuevo,$fnac_nuevo, $id_pais_nuevo,$id_coches_despues)
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
        
        // Actualización de AFICIONES
        foreach ($persona->practica as $practica)  {
            $id = $practica->aficion->id;
            $key = array_search($id,$id_aficiones_despues);
            if ( $key !== false) { //  No hago nada
                unset($id_aficiones_despues[$key]);
            }
            else { // Borrar la práctica
                R::trash($practica);
            }
        }
        
        foreach ($id_aficiones_despues as $id_add) {
            $practica = R::dispense('practica');
            $practica->aficion = R::load('aficion',$id_add);
            $practica->persona = $persona;
            R::store($practica);
            }
        }
        return $ok;
    }
    public function delete($id) {
        $persona = R::load('persona',$id);
        R::trash($persona);
    }
}