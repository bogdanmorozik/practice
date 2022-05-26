<?php 
$host = 'localhost'; 
$database = 'cars'; 
$user = 'root';
$password = '11111111'; 
$link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));	
$query0 ="SELECT * FROM `category` ";
$res0 = mysqli_query($link, $query0); 
$query1 ="SELECT * FROM `brand` ";
$res1 = mysqli_query($link, $query1); 
$query2 ="SELECT * FROM `models` ";
$res2 = mysqli_query($link, $query2); 
$query3 ="SELECT * FROM `groups` ";
$res3 = mysqli_query($link, $query3); 
?>
<!DOCTYPE html>
<html>
	<form method="POST" action="" enctype="multipart/form-data">
		<title>Add product</title>
		<div>
			<label>Number of lot</label>
			<input type="text" name="number">
		</div>
		<div>
			<label>Name</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Price UAH</label>
			<input type="text" name="price">
		</div>
		<div>
			<label>Photo</label>
			<input type="file" name="image">
		</div>
		<div>
			<label for="cars_category">Category:</label>
			<select name="category" id="cars_category">
			  <?php
			  	foreach ($res0 as $row0) {
			   		echo "<option value='" . $row0["name_category"] . "'>" . $row0["name_category"] . "</option>" ;
		  		}?>
	  		</select>
		</div>
		<div>
			<label for="cars_brand">Brand:</label>
			<select name="brand" id="cars_brand">
			  <?php
			  	foreach ($res1 as $row1) {
			   		echo "<option value='" . $row1["name_brand"] . "'>" . $row1["name_brand"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label for="cars_model">Model:</label>
			<select name="model" id="cars_model">
			  <?php
			  	foreach ($res2 as $row2) {
			   		echo "<option value='" . $row2["name_model"] . "'>" . $row2["name_model"] . "</option>" ;
		  		}?>
			</select>
		</div>
		<div>
			<label for="cars_group">Group:</label>
			<select name="group" id="cars_group">
			  <?php
			  	foreach ($res3 as $row3) {
			   		echo "<option value='" . $row3["name_group"] . "'>" . $row3["name_group"] . "</option>" ;
		  		}?>
			</select>
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
	$querys = "SELECT * FROM `product`";
	$result = mysqli_query($link, $querys); 
	if ($result)
	{
		echo "Вхід в базу пройшов успішно";
		echo "<br>";
	} 
	echo "<br><a href='/admin/sesion.php'>Повернутись до адмінки</a></br>";	
	if (isset($_POST['submitForm'])) {
		$number = $_POST['number'];
		$name = $_POST['title'];
		$price = $_POST['price'];
		$image=$_FILES['image']; 
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$group = $_POST['group'];
		if (!empty($number) && !empty($name) && !empty($price) && !empty($image) && !empty($category) && !empty($brand)){
			$categorys = "SELECT `id_category` FROM `category` WHERE `name_category` LIKE '" .$category. "' ";
			$categorysql = mysqli_query($link, $categorys);
			if ($categorysql) {
		  		foreach ($categorysql as $row4) {
		  			$idcategory = $row4["id_category"];
		  		}
			}
			$brands = "SELECT `id_brand` FROM `brand` WHERE `name_brand` LIKE '" .$brand. "' ";
			$brandsql = mysqli_query($link, $brands);
			if ($brandsql) {
		  		foreach ($brandsql as $row5) {
		  			$idbrand = $row5["id_brand"];
		  		}
			}
			$modelss = "SELECT `id_model` FROM `models` WHERE `name_model` LIKE '" .$model. "' ";
			$modelsql = mysqli_query($link, $modelss);
			
			if ($modelsql) {
		  		foreach ($modelsql as $row6) {
		  			$modelid = $row6["id_model"];

		  		}
			}
			
			
			$groupss = "SELECT `id_group` FROM `groups` WHERE `name_group` LIKE '" .$group. "' ";
			$groupsql = mysqli_query($link, $groupss);
			if ($groupsql) {
		  		foreach ($groupsql as $row7) {
		  			$groupid = $row7["id_group"];
		  		}
			}
			$file = $_FILES['image'];
			$namephoto = $file['name'];
			$pathfile = __DIR__ . '/img/prod/'. $namephoto;
			if(!move_uploaded_file($file['tmp_name'], $pathfile)){
				echo "Файл не зберігся";
			}
			if($modelid == NULL && $groupid ==NULL){
				$sql = "INSERT INTO `product`(`number_lot`, `name_product`, `price`, `photo`, `id_category`, `id_brand`) VALUES ('" .$number. "','" .$name. "','" .$price. "','" .$namephoto. "','" .$idcategory. "','" .$idbrand. "')";
			}
			else{
			$sql = "INSERT INTO `product`(`number_lot`, `name_product`, `price`, `photo`, `id_category`, `id_brand`, `id_model`, `id_group`) VALUES ('" .$number. "','" .$name. "','" .$price. "','" .$namephoto. "','" .$idcategory. "','" .$idbrand. "','" .$modelid. "','" .$groupid. "')";}
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