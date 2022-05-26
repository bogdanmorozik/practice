<?php 
$host = 'localhost'; 
$database = 'cars'; 
$user = 'root';
$password = '11111111'; 
$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));	
$query ="SELECT * FROM `models` ";
$res = mysqli_query($link, $query); 
?>
<!DOCTYPE html>
<html>
	<form method="POST" action="" enctype="multipart/form-data">
		<title>Add group</title>
		<div>
			<label for="cars_model">Model:</label>
			<select name="model" id="cars_model">
			  <?php
			  	foreach ($res as $row2) {
			   		echo "<option value='" . $row2["name_model"] . "'>" . $row2["name_model"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label>Name group</label>
			<input type="text" name="group">
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
	$querys = "SELECT * FROM `models`";
	$result = mysqli_query($link, $querys); 
	if ($result)
	{
		echo "Вхід в базу пройшов успішно";
		echo "<br>";
	}  
	$model = $_POST['model'];
	$group=$_POST['group']; 
	if (isset($_POST['submitForm'])) {
		if (!empty($model) && !empty($group)) {
			$idsql = "SELECT `id_model` FROM `models` WHERE `name_model` LIKE '" .$model. "' ";
			$id2 = mysqli_query($link, $idsql);
			if ($id2) {
		  		foreach ($id2 as $row) {
		  			$id = $row["id_model"];
		  		}
			}
			$sql = "INSERT INTO `groups`(`id_model`, `name_group`) VALUES ('" .$id. "','" .$group. "')";
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
	echo "<br><a href='/admin/sesion.php'>Повернутись до адмінки</a>";
?>