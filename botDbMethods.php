<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "connect.php";

class botClass{
	var $con;
	function __construct(){
		$call = new Connection();
		$this->con = $call->getConnection();
	}

	//Create a new instance on the DB
	function createData($senderId, $disco, $category, $number, $outputText){
		//var_dump($outputText);exit;
		$sql = "INSERT INTO botActivity (senderId, disco, category, meter, outputText)
		VALUES('".$senderId."', '".$disco."', '".$category."', '".$number."', '".$outputText."')";
		$res = mysqli_query($this->con, $sql);
	}
	//Update an instance using the senderId
	function updateData($senderId, $disco, $category, $number, $outputText){
		$update = "UPDATE botActivity SET disco = '$disco', category = '$category', 
				meter = '$number', outputText = '$outputText' WHERE senderId = '$senderId'
		";	
		$res = mysqli_query($this->con, $update);
	}
}