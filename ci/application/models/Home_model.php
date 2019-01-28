<?php

class Persona_model extends CI_Model
{
    
    public function getEdades() {
        $sql = <<<SQL
    SELECT id,(TIMESTAMPDIFF(YEAR,fnac,CURDATE())) as edad
    FROM persona
SQL;
        return R::getAssoc($sql);
    }
    
    public function getEstaturamedia() {
        $sql = <<<SQL
    SELECT avg(estatura) as centimetros
    FROM persona
SQL;
        return R::getAssoc($sql);
    }
    
    
    
    public function comprobarusuarios($usuarios, $nombre, $password){
        
        $sql = <<<SQL
    SELECT nombre, password
    FROM usuarios where nombre=$nombre and password=$password;
SQL;
        return R::getAssoc($sql);
    }
    public function crear($dni, $nombre, $apellido, $estatura, $fnac, $pais_id, $coches_id, $aficiones_id)
    {
        $ok = false;
        
        $bean = R::findOne('persona', 'dni=?', [$dni]);
        $ok = ($bean == null);
        
        // R::debug();
        if ($ok) {
            $persona = R::dispense('persona');
            $persona->dni = $dni;
            $persona->nombre = $nombre;
            $persona->apellido = $apellido;
            $persona->estatura = $estatura;
            $persona->fnac = $fnac;
            $persona->nace = R::load('pais', $pais_id);
            foreach ($coches_id as $coche_id) {
                $coche = R::load('coche', $coche_id);
                $coche->poseecoche = $persona;
                R::store($coche);
            }
            foreach ($aficiones_id as $aficion_id) {
                $aficion = R::load('aficion', $aficion_id);
                $practica = R::dispense('practica');
                $practica->persona = $persona;
                $practica->aficion = $aficion;
                R::store($practica);
            }
            R::store($persona);
        }
        return $ok;
    }
    
    
    
    public function getPersonaById($id)
    {
        return R::findOne('persona', 'id=?', [
            $id
        ]);
    }
    

    
    public function delete($id)
    {
        $persona = R::load('persona', $id);
        R::trash($persona);
    }
}