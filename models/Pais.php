<?php

namespace Models;

use Config\Db;

class Pais extends Db
{
    public function get(): void
    {
        $stmt = $this->getConnection()->prepare("");
    }

    public function save($data)
    {
        $sql = "INSERT INTO pais ( nombrePais  ) VALUES (?)";
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


    public function update($id, $data): void
    {
     
       
    }


    public function delete($id)
    {
       
    }
    

    public function getById($id)
    {
        try {
            $stmt = $this->getConnection()->prepare("SELECT * FROM pais WHERE idPais = $id");
            $stmt->execute();
            $message = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($message);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}
