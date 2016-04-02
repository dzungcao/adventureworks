<?php
include('include/auth.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$username = $_POST['username'];
	$login = Auth::login($username);
	if($login){
		header('location: home.php');	
	}
}
?>
<h1>Login</h1>
<hr/>
<strong>Please enter your username and password to login</strong>

<form method="POST">
	<table>
		<tr>
			<td><label>Username</label></td>
			<td><input name="username"></input></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input name="password" type="password"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Login"/></td>
		</tr>
	</table>
</form>