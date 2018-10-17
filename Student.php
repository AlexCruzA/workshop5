<?php
require 'DataAccess.php';

class Student {

  public $id;
  public $first_name;
  public $last_name;
  public $email;

  function __construct($id, $first_name, $last_name, $email) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->email = $email;
    $this->last_name = $last_name;
  }

  function Student($id, $first_name, $last_name, $email) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
  }

  function to_string(){
  	return "{$this->id}:{$this->first_name}:{$this->last_name}:{$this->email}";
  }

  function insert(){
  	$da = new DataAccess();
  	$da->connect();

  	$sql = "INSERT INTO students (id, first_name, last_name, email)
			VALUES (".$this->id.",".$this->$first_name.",".$this->$last_name.",".$this->$email.".)";
	$result = $conn->query($sql);
  }
}