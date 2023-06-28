<?php 
namespace Controllers;

use Models\Camper;

class CamperController {
    public static function  saveCamper(){
        $dataFront = json_decode(file_get_contents("php://input"), true);
        $res = (new Camper())->save($dataFront);
        echo $res;
    }
}