<!DOCTYPE html>
<html>
	<form method="GET" action="">
		<title>Login form</title>
		<div>
			<label>Login</label>
			<input type="text" name="login">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="button">
			<button type="submit" formaction="" name="submitForm">Почати сесію</button>
		</div>
	</form>
</html>
<?php
session_start();
	$host = 'localhost'; 
	$database = 'cars'; 
	$user = 'root';
	$password = '11111111'; 
	$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
	if (isset($_GET['submitForm'])) {			
		$login = $_GET['login'];
		$password = $_GET['password'];
		if (!empty($login) && !empty($password)) {
			$sql = "SELECT * FROM `users` WHERE `login`='" .$login. "' AND`password`='" .$password. "'";
			$results = mysqli_query($link, $sql); 
			if ($results) {
				foreach ($results as $row) {
				    $_SESSION['name'] = $row["login"];
  				}
			}
			$count  = mysqli_num_rows($results);
			if ($count == 0) {
				echo "Неправильний логін або пароль";
			} 
			else {
				echo "Ви увійшли!";
				header('Location: /admin/sesion.php');
			}
		}
		else {
			echo "Заповніть значення полів";
		}
	}
?>