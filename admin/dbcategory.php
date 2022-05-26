<!DOCTYPE html>
<html>
	<form method="POST" action="" enctype="multipart/form-data">
		<title>Add category</title>
		<div>
			<label>Name</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Image</label>
			<input type="file" name="image">
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
	$querys = "SELECT * FROM `category`";
	$result = mysqli_query($link, $querys); 
	if ($result)
	{
		echo "Вхід в базу пройшов успішно";
		echo "<br>";
	} 
	if (isset($_POST['submitForm'])) {
		$title = $_POST['title'];
		$image=$_FILES['image']; 			
		if (!empty($title) && !empty($image)) {
			$file = $_FILES['image'];
			$name = $file['name'];
			$pathfile = __DIR__ . '/img/category/'. $name;
			if(!move_uploaded_file($file['tmp_name'], $pathfile)){
				echo "Файл не зберігся";
			}
			$sql = "INSERT INTO category(name_category, photo) VALUES ('" .$title. "','" .$name. "')";
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
	echo "<br><a href='/admin/redcategory.php'>Редагувати категорії</a>";
?>