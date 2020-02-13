<?php

class Product extends Database{
    public $sql;

   public function create(array $data):bool
   {
        $this->sql = "INSERT INTO `products`( `name`, `distribution`, `price`, `category`,`image`) 
        VALUES (:name,:distribution,:price,:category,:image)";
        $this->query($this->sql);
        $this->bind(":name",$data['name']);
        $this->bind(":distribution",$data['distribution']);
        $this->bind(":price",$data['price']);
        $this->bind(":image",$data['image']);
        if($this->execute()){
            return true;
        }
        return false;
   }

   public function update(array $data)
   {
    $this->sql = "UPDATE `products` SET `name`=:name,`distribution`=:distribution,`price`=:price,
    `category`=:category WHERE 1";
    $this->query($this->sql);
    $this->bind(":name",$data['name']);
    $this->bind(":distribution",$data['distribution']);
    $this->bind(":price",$data['price']);
    $this->bind(":image",$data['image']);
    if($this->execute()){
        return true;
    }
    return false;
   }

   public function destroy($id)
   {
    $this->sql = "DELETE FROM `products` WHERE id = :id LIMIT 1";
    $this->query($this->sql);
    $this->bind(":id",$data['id']);
    if($this->execute()){
        return true;
    }
    return false;
   }

   public function findById($id)
   {
    $this->sql = "SELECT * FROM `products` ORDER BY ID LIMIT = 1 ASC";
    $this->query($this->sql);
    $this->bind(":id",$id);
    $row = $this->Fetch();
    if($this->rowCount() == 1){
        return $row;
    }
    return null;
   }

   public function findAll()
   {
       $this->sql = "SELECT * FROM `products` ORDER BY ID ASC";
       $this->query($this->sql);
       if($this->rowCount() >= 0){
        $row = $this->FetchAll();
        return $row;
       }
      
   }
   
}