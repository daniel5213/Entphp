<?php

class Usuario_model extends CI_Model
{
    public function ejecutarsentencia($nombre, $password){
        
        $sql = <<<SQL
    SELECT nombre
    FROM usuarios where nombre='$nombre' and password='$password';
SQL;
        return R::getAssoc($sql);
    }
    
    public function iniciosesion(){
        
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
            $ok=true;
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
?>