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
    select avg(estatura) as media from persona 
        where id 
            in ( select persona_id from practica 
                  where aficion_id=( select id from aficion))
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

    public function listar()
    {
        return R::findAll('persona');
    }

    public function getPersonaById($id)
    {
        return R::findOne('persona', 'id=?', [
            $id
        ]);
    }

    public function update($id, $dni_nuevo, $nombre_nuevo, $apellido_nuevo, $id_pais_nuevo, $id_coches_despues, $id_aficiones_despues)
    {
        $ok = false;

        $bean = R::findOne('persona', 'id=?', [
            $id
        ]);
        $persona_error = R::findOne('persona', 'dni=? and id<>?', [
            $dni_nuevo,
            $id
        ]);
        $ok = ($bean != null && $persona_error == null);

        if ($ok) {
            $persona = R::load('persona', $id);
            $persona->dni = $dni_nuevo;
            $persona->nombre = $nombre_nuevo;
            $persona->apellido = $apellido_nuevo;
            $persona->nace = R::load('pais', $id_pais_nuevo);
            R::store($persona);

            // Actualización de COCHES
            foreach ($persona->alias('poseecoche')->ownCocheList as $coche) {
                $id = $coche->id;
                $key = array_search($id, $id_coches_despues);
                if ($key !== false) { // No hago nada
                    unset($id_coches_despues[$key]);
                } else { // Borrar
                    $coche->poseecoche = null;
                    R::store($coche);
                }
            }

            foreach ($id_coches_despues as $id_add) {
                $coche = R::load('coche', $id_add);
                $coche->poseecoche = $persona;
                R::store($coche);
            }

            // R::debug();

            // Actualización de AFICIONES
            foreach ($persona->ownPracticaList as $practica) {
                $id = $practica->aficion->id;
                $key = array_search($id, $id_aficiones_despues);
                if ($key !== false) { // No hago nada
                    unset($id_aficiones_despues[$key]);
                } else { // Borrar la práctica
                         // echo "<br/><b><font color=\"red\">DEL {$practica->aficion->nombre}</font></b><br/>"; //TODO DEBUG
                    R::store($persona);
                    R::trash($practica);
                }
            }

            /*
             * echo "<br/><b><font color=\"red\"><pre>"; //TODO DEBUG
             * print_r($id_aficiones_despues); //TODO DEBUG
             * echo "</pre></font></b><br/>"; //TODO DEBUG
             * R::commit();
             */

            foreach ($id_aficiones_despues as $id_add) {
                $practica_nueva = R::dispense('practica');
                $aficion_nueva = R::load('aficion', $id_add);
                $practica_nueva->aficion = $aficion_nueva;
                $practica_nueva->persona = $persona;
                // echo "<br/><b><font color=\"red\">ADD {$aficion_nueva->nombre}</b></font><br/>\n"; //TODO DEBUG
                R::store($practica_nueva);
            }
        }
        return $ok;
    }

    public function delete($id)
    {
        $persona = R::load('persona', $id);
        R::trash($persona);
    }
}