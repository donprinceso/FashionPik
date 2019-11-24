<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ServerLand
 */
class User extends Database{

    public $name;
    public $sql;
    

   public function FindByEmail(string $email):bool
    {
       $this->sql = 'SELECT id FROM users WHERE email = :email ';
       $this->query($this->sql);
       $this->bind(':email', $email);
       $this->execute();
       $row = $this->Fetch();
       if($this->rowCount() > 0){
          return true;
       }else{
          return false;
       }
    }

    public function register(array $data):bool
    {
        $this->sql = 'INSERT INTO users (name,email,password,token) VALUES (:name,:email,:password,:token)';
        $this->query($this->sql);
        $this->bind(':name',$data['name']);
        $this->bind(':email',$data['email']);
        $this->bind(':password',$data['password']);
        $this->bind(':token',generate_token());
        if($this->execute()){
           return true;
        }
        return false;
    }

    public function login(array $data):boolval
    {
       $this->sql = '';
       $this->query($this->sql);
       $this->execute([
            'email' => $data['email'],
            'password' => $data['password']
       ]);
       $row = $this->Fetch();
       $password_hash = $row->password;
       if(password_verify($data['password'],$password_hash)){
          return $row;
       }
       return null;
    }
}