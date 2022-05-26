<?php
	$host = 'localhost'; 
	$database = 'cars'; 
	$user = 'root';
	$password = '11111111'; 
	$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));			
	$querys = "SELECT * FROM `category`";
	$result = mysqli_query($link, $querys); 
	if ($result) {
		echo "<table><tr><th>Name</th></tr>";
	  	foreach ($result as $row) {
		    echo "<tr>";
		    echo "<td>" . $row["name_category"] . "</td>";
		    echo "</tr>";
	  	}
	}
	echo "<br><a href='/admin/sesion.php'>Повернутись до адмінки</a>";
	echo "<br><a href='/admin/dbcategory.php'>Додати категорії</a>";
?>
<!DOCTYPE html>
<html>
	<form method="POST" action="">
		<title>Edit category</title>
		<div>
			<label for="category">Category:</label>
			<select name="title" id="category">
			  <?php
			  	foreach ($result as $row2) {
			   		echo "<option value='". $row2["name_category"] . "'>" . $row2["name_category"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label>New name category</label>
			<input type="text" name="newcategory">
		</div>
		<div class="button">
			<button type="submit" name="submitForm">Редагувати</button>
			<button type="submit" name="deleteForm">Видалити</button>
		</div>
	</form>
</html>
<?php 
if (isset($_POST['submitForm'])) {
	$title = $_POST['title'];
	$nname = $_POST['newcategory'];
	if (!empty($title) && !empty($nname)) {
		$sqls = "SELECT * FROM `category` WHERE `name_category` LIKE '" .$title. "'";
		$result2 = mysqli_query($link, $sqls);		
		foreach($result2 as $row3){
			$id_cat= $row3['id_category'];
		}
		$sql = "UPDATE `category` SET `name_category` = '" .$nname. "' WHERE `category`.`id_category` = '".$id_cat."' ";
		$results = mysqli_query($link, $sql); 
		if ($results){
			echo "Дані завантажені. Перезавантажте сторінку";
		} 
		else {
			echo "Помилка " . mysqli_error($link);
		} 
	}
	else {
		echo "Заповніть значення полів";
	}
}
if (isset($_POST['deleteForm'])) {
	$title = $_POST['title'];
	$sqld = "DELETE FROM `category` WHERE `name_category` LIKE '" .$title. "'";
	$resd = mysqli_query($link, $sqld);
	if ($resd){
		echo "Дані видалені. Перезавантажте сторінку";
	} 
	else {
		echo "Помилка " . mysqli_error($link);
	} 
}
?>