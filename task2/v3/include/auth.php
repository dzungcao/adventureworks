<?php
require_once('database.php');

class Auth{

	public static function authenticated(){
		return isset($_SESSION['user_id']);
	}

	public static function username(){
		session_start();
		if($_SESSION['user_id']) return $_SESSION['user_id'];
		return null;
	}

	public static function login($username){
		$employee = Database::getEmployeeByUsername($username);
		if($employee){
			session_start();
			$_SESSION['user_id'] = $employee['BusinessEntityID'];
			return true;
		}
		return false;
	}

	public static function logout(){
		session_start();
		unset($_SESSION['user_id']);
	}
}