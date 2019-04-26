<?php

class User {

private $email;
private $password;
private $name;
private $surname;
private $img_profile;
private $about;

public function getEmail() { return $this->email; }
public function setEmail($email) { $this->email = $email; }

public function getPassword() { return $this->password; }
public function setPassword($password) { $this->password = $password; } 

public function getFirstName() { return $this->name; }
public function setFirstName($name) { $this->name = $name; } 

public function getLastName() { return $this->surname; }
public function setLastName($surname) { $this->surname = $surname; } 

public function getImg() { return $this->img_profile; }
public function setImg($img_profile) { $this->img_profile = $img_profile; } 

public function getAboutUser() { return $this->about; }
public function setAboutUser($about) { $this->about = $about; } 


function __construct($email, $password, $name, $surname, $img_profile, $about) {
$this->email=$email;
$this->password=$password;
$this->name=$name;
$this->surname=$surname;
$this->img_profile=$img_profile;
$this->about = $about;
}
}
?>