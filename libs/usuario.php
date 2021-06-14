<?php
class Usuario {

    protected $name;
    protected $surname;
    protected $email;
    protected $username;
    protected $password;
        
    function __construct($name,$surname,$email,$username,$password) {
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->username=$username;
        $this->password=md5($password);      
    }
   
    public function getName() { return $this->name;}
    public function setName($name) { $this->name = $name; return $this; }
    public function getSurname() { return $this->surname;}
    public function setSurname($surname) { $this->surname = $surname; return $this; }
    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; return $this; }
    public function getUsername() { return $this->username;}
    public function setUsername($username) { $this->username = $username; return $this; }
    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; return $this; }
    
   }

?>