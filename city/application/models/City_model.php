<?php

class City_model extends CI_Model
{

    public function crear($name,$country_id)
    {
        $ok = false;
        
        $bean = R::findOne('city','name=?',[$name]);
        $ok = ($bean == null);
        
        if ($ok) {
            $city = R::dispense('city');
            $city->name = $name;
            $city->country=R::load('country', $country_id);
            R::store($city);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('city');
    }

    public function getcityById($id) {
        return R::findOne('city','id=?',[$id]);
    }

    
    public function update($id,$name_new)
    {
        $ok = false;
        
        $bean = R::findOne('city','id=?',[$id]);
        $city_error = R::findOne('city','name=? and id<>?',[$name_new,$id]);
        $ok = ($bean != null && $city_error == null);
        
        if ($ok) {
            $city = R::load('city',$id);
            $city->name = $name_new;
            R::store($city);
        }
        return $ok;
    }
    
    public function delete($id) {
        $city = R::load('city',$id);
        R::trash($city);
    }
}