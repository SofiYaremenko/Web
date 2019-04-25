<?php

class Course {

private $id;
private $title;
private $description;
private $img;
private $category;
private $lang;
private $hoursAmount;

public function getId() { return $this->id; }
public function setId($id) { $this->id = $id; }

public function getTitle() { return $this->title; }
public function setTitle($title) { $this->title = $title; } 

public function getDescription() { return $this->description; }
public function setDescription($description) { $this->description = $description; } 

public function getImg() { return $this->img; }
public function setImg($img) { $this->img = $img; } 

public function getCategory() { return $this->category; }
public function setCategory($category) { $this->category = $category; } 

public function getLang() { return $this->lang; }
public function setLang($lang) { $this->lang = $lang; } 

public function getHoursAmount() { return $this->hoursAmount; }
public function setHoursAmount($hoursAmount) { $this->hoursAmount = $hoursAmount; } 

function __construct($id, $title, $description, $img, $category, $lang, $hoursAmount) {
$this->id=$id;
$this->title=$title;
$this->description=$description;
$this->img=$img;
$this->category = $category;
$this->lang=$lang;
$this->hoursAmount=$hoursAmount;
}
}
?>