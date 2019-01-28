<?php

class Country_model extends CI_Model
{

        
    
    public function crear($name)
    {
        $ok = false;

        $bean = R::findOne('country', 'name=?', [$name]);
        $ok = ($bean == null);

        // R::debug();
        if ($ok) {
            $country = R::dispense('country');
            
            $country->name = $name;
                        
            R::store($country);
        }
        return $ok;
    }

    public function listar()
    {
        return R::findAll('country');
    }

    public function getcountryById($id)
    {
        return R::findOne('country', 'id=?', [
            $id
        ]);
    }

    public function update($id, $dni_nuevo, $nombre_nuevo/*,$id_pais_nuevo,*/ )
    {
        $ok = false;

        $bean = R::findOne('user', 'id=?', [
            $id
        ]);
        $user_error = R::findOne('user', 'dni=? and id<>?', [
            $dni_nuevo,
            $id
        ]);
        $ok = ($bean != null && $user_error == null);

        if ($ok) {
            $country = R::load('user', $id);
            $country->dni = $dni_nuevo;
            $country->nombre = $nombre_nuevo;
            
            $country->nace = R::load('pais', $id_pais_nuevo);
            

            // Actualización de COCHES
            foreach ($country->alias('poseecoche')->ownCocheList as $coche) {
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
                $coche->poseecoche = $country;
                R::store($coche);
            }

            // R::debug();

            // Actualización de AFICIONES
            foreach ($country->ownPracticaList as $practica) {
                $id = $practica->aficion->id;
                $key = array_search($id, $id_aficiones_despues);
                if ($key !== false) { // No hago nada
                    unset($id_aficiones_despues[$key]);
                } else { // Borrar la práctica
                         
                    R::store($country);
                    R::trash($practica);
                }
            }

            foreach ($id_aficiones_despues as $id_add) {
                $practica_nueva = R::dispense('practica');
                $aficion_nueva = R::load('aficion', $id_add);
                $practica_nueva->aficion = $aficion_nueva;
                $practica_nueva->country = $country;
              
                R::store($practica_nueva);
            }
        }
        return $ok;
    }

    public function delete($id)
    {
        $country = R::load('country', $id);
        R::trash($country);
    }
}