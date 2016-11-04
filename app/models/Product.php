<?php

class Product extends Database{
    public $sql;

   public function create(array $data):bool
   {
        $this->sql = "INSERT INTO `products`(`id`, `name`, `distribution`, `price`, `category`, `created_at`, `updated_at`) 
        VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
        $this->query($this->sql);
        $this->bind("",$data['']);
        $this->bind("",$data['']);
        $this->bind("",$data['']);
        $this->bind("",$data['']);
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
    $this->bind("",$data['']);
    $this->bind("",$data['']);
    $this->bind("",$data['']);
    $this->bind("",$data['']);
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
    $this->sql = "";
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
       $this->sql = "";
       $this->query($this->sql);
       $row = $this->FetchAll();
       if($this->rowCount >= 1){
           return $row;
       }
   }
}