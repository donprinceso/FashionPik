<?php
 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author ServerLand
 */
class Database{
    public $stmt;
    public $dbh;
    public $error;


    public function connect()
    {
        $dsn = "mysql:host=".db_host.";dbname=" . db_name;
        $option = array(
            PDO::ATTR_PERSISTENT =>true ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
        try {
            $this->dbh = new PDO($dsn, db_user, db_password, $option);
        } catch (PDOException $ex) {
            $this->$error = $ex->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->connect()->perpare($sql);
    }

    public function exectue()
    {
        return $this->stmt->exectue();
    }

    public function Fetch()
    {
        $this->exectue();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function FetchAll()
    {
        $this->exectue();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}