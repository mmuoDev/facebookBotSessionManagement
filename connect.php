<?php

class Connection{
	function getConnection(){
		$con = mysqli_connect("localhost", "root", "", "pebbot");
		return $con;
	}
}