<?php
class Auth{
	public static login($username){

	}

	public static logout(){
		session_start();
		unset($_SESSION['user_id']);
	}
}