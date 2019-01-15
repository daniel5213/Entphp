<?php

class Persona_model extends CI_Model
{
     public function iniciosesion($nombre, $password){
        
        $sql = <<<SQL
    SELECT nombre, password
    FROM usuarios where nombre=$nombre and password=$password;
SQL;
        return R::getAssoc($sql);
    }
    public function crear($correo, $nombre, $password)
    {
        $ok = false;
        
        $bean = R::findOne('usuarios', 'correo=?', [$correo]);
        $ok = ($bean == null);
   
           if ($ok) {
            $usuario = R::dispense('usuarios');
            $usuario->correo = $correo;
            $usuario->nombre = $nombre;
            $usuario->password = $password;
            
            
           
            R::store($usuario);
        }
        return $ok;
    }
    
    
    
    public function getPersonaById($id)
    {
        return R::findOne('usuarios', 'id=?', [
            $id
        ]);
    }
    

    
    public function delete($id)
    {
        $usuario = R::load('persona', $id);
        R::trash($usuario);
    }
}