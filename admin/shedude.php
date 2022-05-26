<?php
	$host = 'localhost'; 
	$database = 'cars'; 
	$user = 'root';
	$password = '11111111'; 
	$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));			
	$querys = "SELECT * FROM `workday`";
	$result = mysqli_query($link, $querys); 
	if ($result) {
		echo "<table><tr><th>Day</th><th>From</th><th>To</th></tr>";
	  	foreach ($result as $row) {
		    echo "<tr>";
		    echo "<td>" . $row["day"] . "</td>";
		    echo "<td>" . $row["workdayfrom"] . "</td>";
		    echo "<td>" . $row["workdayto"] . "</td>";
		    echo "</tr>";
	  	}
	}
	echo "<br><a href='/admin/sesion.php'>Повернутись до адмінки</a>";
?>
<!DOCTYPE html>
<html>
	<form method="POST" action="">
		<title>Edit shedude</title>
		<div>
			<label for="category">Day:</label>
			<select name="title" id="category">
			  <?php
			  	foreach ($result as $row2) {
			   		echo "<option value=" . $row2["day"] . ">" . $row2["day"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label>New time from</label>
			<input type="time" name="newtfrom">
		</div>
		<div>
			<label>New time to</label>
			<input type="time" name="newtto">
		</div>
		<div class="button">
			<button type="submit" name="submitForm">Редагувати</button>
		</div>
	</form>
</html>
<?php 
if (isset($_POST['submitForm'])) {
	$title = $_POST['title'];
	$tfrom = $_POST['newtfrom'];
	$tto = $_POST['newtto'];
	if (!empty($tfrom) && !empty($tto)) {
		$sql = "UPDATE `workday` SET `workdayfrom` = '" .$tfrom. "', `workdayto` = '" .$tto. "'  WHERE `workday`.`day` = '".$title."' ";
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
?>