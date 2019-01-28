<?php

class Aficion_model extends CI_Model
{

    public function crear($nombre)
    {
        $ok = false;
        
        $bean = R::findOne('aficion','nombre=?',[$nombre]);
        $ok = ($bean == null);
        
        if ($ok) {
            $aficion = R::dispense('aficion');
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
        return $ok;
    }

    public function listar() {
        
        return R::findAll('aficion');
    }

    public function getAficionById($id) {
        return R::findOne('aficion','id=?',[$id]);
    }
    

    public function getPersonasxAficion(){
        $sql = <<<SQL
			SELECT pr.aficion_id,count(pe.id)
				FROM `practica` pr, `persona` pe
				WHERE pe.id=pr.persona_id
				GROUP BY pr.aficion_id
SQL;
        return R::getAssoc($sql);
    }
    
    public function getEdadmedia (){
        $sql = <<<SQL
			SELECT pr.aficion_id,ROUND(avg(TIMESTAMPDIFF(YEAR,pe.fnac,CURRENT_DATE())),1)
				FROM `practica` pr, `persona` pe
				WHERE pe.id=pr.persona_id
				GROUP BY pr.aficion_id
SQL;
        return R::getAssoc($sql);
        
    }
    public function getEstaturamedia() {
        $sql= <<<sql
        SELECT pr.aficion_id,ROUND(avg(pe.estatura),2)
        FROM `practica` pr, `persona` pe
        WHERE pe.id=pr.persona_id
        GROUP BY pr.aficion_id 
sql;
        return R::getAssoc($sql);
    }
    
    

    public function update($id,$nombre_nuevo)
    {
        $ok = false;
        
        $bean = R::findOne('aficion','id=?',[$id]);
        $aficion_error = R::findOne('aficion','nombre=? and id<>?',[$nombre_nuevo,$id]);
        $ok = ($bean != null && $aficion_error == null );
        
        if ($ok) {
            $aficion = R::load('aficion',$id);
            $aficion->nombre = $nombre_nuevo;
            R::store($aficion);
        }
        return $ok;
    }
    
    public function delete($id) {
        $aficion = R::load('aficion',$id);
        R::trash($aficion);
    }
}