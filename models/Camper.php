<?php

namespace Models;

use Config\Db;

class Camper extends Db
{
    public function get(): void
    {
        $stmt = $this->getConnection()->prepare("");
    }

    public function save($data)
    {
        $sql = "INSERT INTO campers (idCamper,nombreCamper, apellidoCamper, fechaNac , idReg ) VALUES (:idCamper, :nombreCamper, :apellidoCamper, :fechaNac,:idReg )";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindValue("idCamper", $data["idCamper"]);
        $stmt->bindValue("nombreCamper", $data["nombreCamper"]);
        $stmt->bindValue("apellidoCamper", $data["apellidoCamper"]);
        $stmt->bindValue("fechaNac", $data["fechaNac"]);
        $stmt->bindValue("idReg", $data["idReg"]);

        try {
            $stmt->execute();
            $message = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($message);
        } catch (\PDOException $e) {
            echo "error modelo camper";
            print_r($e->getMessage());
        }
    }


    public function update($id, $data)
    {
        $sql = "UPDATE INTO camper (idCamper,  nombreCamper, apellidoCamper, fechaNac , idReg ) VALUES (?,?,?,?,?) WHERE idCamper = $id ";
        $stmt = $this->getConnection()->prepare($sql);
        try {
            $stmt->execute($data);
            $message = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($message);
        } catch (\PDOException $e) {
            echo "error modelo pais";
            print_r($e->getMessage());
        }
    }


    public function delete($id)
    {
    }

    public function getById($id)
    {
        try {
            $stmt = $this->getConnection()->prepare("SELECT * FROM campers WHERE idCamper = $id");
            $stmt->execute();
            $message = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($message);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}
