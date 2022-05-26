<!DOCTYPE html>
<html>
	<title>Admin page</title>
</html>
<?php
	session_start();
	if(!empty($_SESSION['name'])){
		$name = $_SESSION['name'];
		echo "Привіт, " . $name;	
		echo "</br><a href='/admin/dbbrand.php'>Перейти до таблиці брендів</a>";
		echo "</br><a href='/admin/dbmodel.php'>Перейти до таблиці моделей</a>";
		echo "</br><a href='/admin/dbgroup.php'>Перейти до таблиці груп</a>";
		echo "</br><a href='/admin/dbcategory.php'>Перейти до таблиці популярні категорії</a>";
		echo "</br><a href='/admin/dbproduct.php'>Перейти до таблиці товарів</a>";
		echo "</br><a href='/admin/shedude.php'>Перейти до таблиці графіка</a>";
		echo "</br><a href='/admin/adress.php'>Перейти до таблиці адрес</a>";
		echo "</br><a href='/admin/logout.php'>Logout</a>";
	}
	else{
		echo "Не сьогодні, сер<br>";
		echo "<a href='/admin/index.php'>Login</a>";
	}
?>