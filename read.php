<?php 

$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$query = "insert into order(id,name,price,quan) ";
$query .= "values ($id, $itemName, $Price, $quan)";
$result = mysqli_query($connection,$query);
							// if ($id==$row['id']) {
// 	$quan=1;
// 	$quan+=$quan;
// 	$price = $quan*$price; 
// }
// else{
// 	$quan=1;
// }

 ?>