<?php

class Database{
	protected function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
	
	public function getCustomers(){
		$conn = self::getConnection();
		$result = mysqli_query($conn, 'SELECT * FROM customer');
		mysqli_close($conn);
		return $result;
	}

	public function getEmployees(){
		$conn = self::getConnection();
		$result = mysqli_query($conn, 'SELECT * FROM employee');
		mysqli_close($conn);
		return $result;
	}

	public function getEmployeeByUsername($username){
		$conn = self::getConnection();
		$query = "SELECT * FROM employee where `LoginID` like '".$username."' LIMIT 1";
		$result = mysqli_query($conn, "SELECT * FROM employee where `LoginID` like '".$username."' LIMIT 1");
		mysqli_close($conn);
		return mysqli_fetch_array($result);
	}
}

