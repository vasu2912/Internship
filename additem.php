<?php include 'db.php' ?>


<!DOCTYPE html>
<html>
<head>
	<style>
		name, price {
			align-self: center;
		}
	</style>
	<title>Menu Item Add</title>
</head>
<body>
	<div class="item_container">
	<form action="additem.php" method="post">
		<p id = "name">Item Name : <input type="text" name="itemname" class="rcorner1"><br></p>
		<p id = "price" >Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<input type="number" name="itemprice" class="rcorner1"><br></p>
	</div>
		<input type="submit" name="submit" style="color: white; background-color: blue; border-radius: 10px; margin-left: 48%; margin-top: 2%;" >

	</form>
				<?php
						if (isset($_POST['submit'])) {
							$itemName = $_POST['itemname'];
							$Price = $_POST['itemprice'];
							$query = "insert into items(name,price) ";
							$query .= "values ('$itemName', $Price)";
							$result = mysqli_query($connection,$query);
								if (!$result) {
									die("Query not executed" . mysqli_error($connection));
									mysqli_close($connection);
								}
								else  {
									echo "Data Added Sucessfully !!";
									mysqli_close($connection);
								}

						}
			 ?>
			
<style>
	.rcorner1{

border-radius: 25px;
  border: 2px solid #blue;
  height: 20px;  
border-radius: 20px;
	}
	.item_container{
		margin-top: 10%;
		margin-left: 38%;
	}
</style>




</body>
</html>