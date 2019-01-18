<?php

class User_model extends CI_Model
{

        
    
    public function crear($dni, $name,$city_id,$travel_id)
    {
        $ok = false;

        $bean = R::findOne('user', 'dni=?', [$dni]);
        $ok = ($bean == null);

        // R::debug();
        if ($ok) {
            $user = R::dispense('user');
            $user->dni = $dni;
            $user->name = $name;
            $user->city = R::load('city', $city_id);
            foreach ($travel_id as $travel) {
                $city = R::load('city', $travel);
                $city->poseecity = $travel;
                R::store($city);
            }
            
            R::store($user);
        }
        return $ok;
    }

    public function listar()
    {
        return R::findAll('user');
    }
    
   

    public function getuserById($id)
    {
        return R::findOne('user', 'id=?', [
            $id
        ]);
    }




}