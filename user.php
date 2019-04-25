<?php

class User {

private $email;
private $firstName;
private $lastName;
private $img;
private $aboutUser;
private $password;

public function getEmail() { return $this->email; }
public function setEmail($email) { $this->email = $email; }

public function getFirstName() { return $this->firstName; }
public function setFirstName($firstName) { $this->firstName = $firstName; } 

public function getLastName() { return $this->lastName; }
public function setLastName($lastName) { $this->lastName = $lastName; } 

public function getImg() { return $this->img; }
public function setImg($img) { $this->img = $img; } 

public function getAboutUser() { return $this->aboutUser; }
public function setAboutUser($aboutUser) { $this->aboutUser = $aboutUser; } 

public function getPassword() { return $this->password; }
public function setPassword($password) { $this->password = $password; } 

function __construct($id, $title, $description, $img, $category, $lang, $hoursAmount) {
$this->email=$email;
$this->firstName=$firstName;
$this->lastName=$lastName;
$this->img=$img;
$this->aboutUser = $aboutUser;
$this->password=$password;
}
}
?>