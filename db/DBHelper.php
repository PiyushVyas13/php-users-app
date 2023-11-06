<?php

namespace db;
use models\User;
use PDO;

class DBHelper
{
    private PDO $pdo;

    public function __construct($dsn, $user, $pass) {
        $this->pdo = new PDO($dsn, $user, $pass);
    }

    public function getData($table) {
        $sql = "SELECT * FROM $table";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll();

        return $rs;
    }

    public function insert($table, object $model) {
        try{
            $cols = "";
            $vals = "";

            foreach ($model as $key => $mod) {
                $cols .= "$key,";
                $vals .= "'$mod',";
            }
            $sql = "INSERT INTO $table (" . rtrim($cols, ',') . ") VALUES (" . rtrim($vals, ',') . ")";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            return true;
        }catch(\PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }
}