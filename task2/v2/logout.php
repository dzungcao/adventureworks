<?php
include('include/auth.php');
Auth::logout();
header('location: login.php');
?>