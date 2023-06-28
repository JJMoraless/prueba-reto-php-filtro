<?php

// use Config\Db;
require_once "./vendor/autoload.php";

use Bramus\Router\Router;
use Controllers\CamperController;
use Controllers\PaisController;



$router = new Router();
$router->get("/pais/{id}",[PaisController::class, 'getPais'] );
$router->post("/pais",[PaisController::class, 'savePais'] );
$router->get("/paises",[PaisController::class, 'getPaises'] );

$router->post("/camper",[CamperController::class, 'saveCamper'] );




$router->get("/uno", function () {
    echo "funciona function";
});

$router->run();


// $db = new Db();
// $conn = $db->getConnection();
