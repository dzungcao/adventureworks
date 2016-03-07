<?php

class Database{
	public function getCustomers(){
		$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$result = mysqli_query($conn, 'SELECT * FROM customer');

		mysqli_close($conn);

		return $result;
	}
	public function getEmployees(){
		$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$result = mysqli_query($conn, 'SELECT * FROM employee');

		mysqli_close($conn);

		return $result;
	}
}

