<?php

namespace Controllers;
use Models\Pais;

class PaisController 
{
    public static  function getPaises()
    {   

    }   
    public static  function savePais()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $res = (new Pais())->save( array_values($data));
        echo $res;
    }
    public static function getPais($id)
    {
        $data = (new Pais())->getById($id);
        echo $data;
    }
    public static function deletePais($id)
    {


    }
    public  static function updatePais($id, $data)
    {
        
    }
}
