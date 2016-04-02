<?php

class Database{
	public static function getCustomers(){
		$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, 'SELECT * FROM customer');
		//close connection
		mysqli_close($conn);
		return $result;
	}
	public static function getEmployees(){
		$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, 'SELECT * FROM employee');
		//close connection
		mysqli_close($conn);
		return $result;
	}
}

