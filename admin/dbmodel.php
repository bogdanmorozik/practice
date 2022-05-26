<?php 
$host = 'localhost'; 
$database = 'cars'; 
$user = 'root';
$password = '11111111'; 
$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));	
$query ="SELECT * FROM `brand` ";
$res = mysqli_query($link, $query); 
?>

<!DOCTYPE html>
<html>
	<form method="POST" action="" enctype="multipart/form-data">
		<title>Add model</title>
		<div>
			<label for="cars_brand">Brand:</label>
			<select name="brand" id="cars_brand">
			  <?php
			  	foreach ($res as $row2) {
			   		echo "<option value='" . $row2["name_brand"] . "'>" . $row2["name_brand"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label>Name model</label>
			<input type="text" name="model">
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
	$brand = $_POST['brand'];
	$model=$_POST['model']; 
	if (isset($_POST['submitForm'])) {
		if (!empty($brand) && !empty($model)) {
			$idsql = "SELECT `id_brand` FROM `brand` WHERE `name_brand` LIKE '" .$brand. "' ";
			$id2 = mysqli_query($link, $idsql);
			if ($id2) {
		  		foreach ($id2 as $row) {
		  			$id = $row["id_brand"];
		  		}
			}
			$sql = "INSERT INTO `models`(`brand`, `name_model`) VALUES ('" .$id. "','" .$model. "')";
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

