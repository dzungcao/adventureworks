<?php
class Auth{
	public static function login($username){

	}

	public static function logout(){
		session_start();
		unset($_SESSION['user_id']);
	}
}