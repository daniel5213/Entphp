<?php 
    function raiz($str){
        $result;
        if (substr($str,strlen($str)-1,strlen($str)) == 'a' || substr($str,strlen($str)-1,strlen($str)) == 'o'){
             $result = substr($str,0,strlen($str)-1);
        }elseif(substr($str,strlen($str)-2,strlen($str)) == 'as' || substr($str,strlen($str)-2,strlen($str)) == 'os'){
            $result = substr($str,0,strlen($str)-2);;
        }else{
            $result = 'desconocido';
        }
        return $result;
    }
?>