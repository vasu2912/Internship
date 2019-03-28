<?php 
include 'db.php';
session_start();
if (isset($_GET['id'])) {


	$id = $_GET['id'];
	$_SESSION['count']++;
	$co = $_SESSION['count'];
}
$sql = "UPDATE porder SET quan = $co WHERE id = $id";
$result = mysqli_query($connection, $sql);
if(!$result){
	echo mysqli_error($connection);
}
else{
	header("Location: index.php");
}
 ?>