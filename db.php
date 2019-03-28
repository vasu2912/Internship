<?php 
$connection = mysqli_connect('localhost','root','','loginapp');
if(!$connection){
	echo "Data Base Connection Error". mysqli_error($connection);
}
   ?>
