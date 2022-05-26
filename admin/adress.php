<?php
	$host = 'localhost'; 
	$database = 'cars'; 
	$user = 'root';
	$password = '11111111'; 
	$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));			
	$querys = "SELECT * FROM `adress`";
	$result = mysqli_query($link, $querys); 
	if ($result) {
		echo "<table><tr><th>Adress</th></tr>";
	  	foreach ($result as $row) {
		    echo "<tr>";
		    echo "<td>" . $row["adress"] . "</td>";
		    echo "</tr>";
	  	}
	}
	echo "<br><a href='/admin/sesion.php'>Повернутись до адмінки</a>";
?>
<!DOCTYPE html>
<html>
	<form method="POST" action="" enctype="multipart/form-data">
		<title>Add adress</title>
		<div>
			<label>Adress</label>
			<input type="text" name="title">
		</div>
		<div class="button">
			<button type="submit" name="submitForm">Зберегти в БД</button>
		</div>
	</form>
</html>
<?php
	$host = 'localhost'; 
	$database = 'cars'; 
	$user = 'root';
	$password = '11111111'; 
	$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));			
	$querys = "SELECT * FROM `adress`";
	$result = mysqli_query($link, $querys); 
	if ($result)
	{
		echo "Вхід в базу пройшов успішно";
		echo "<br>";
	} 
	if (isset($_POST['submitForm'])) {
		$title = $_POST['title'];
		if (!empty($title)) {
			$sql = "INSERT INTO adress(adress) VALUES ('" .$title. "')";
			$results = mysqli_query($link, $sql); 
			if ($results)
			{
				echo "Дані завантажені";
			} 
			else {
				echo "Помилка " . mysqli_error($link);
			} 
		}
		else {
			echo "Заповніть значення полів";
		}
	}
?>