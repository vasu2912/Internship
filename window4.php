<?php 
session_start();
$_SESSION['total']=0;
include 'db.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
	  table {
   border-collapse: collapse;
   width: 100%;
   color: red;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child {background-color: #f2f2f2}
</style>
</head>
<body>
  <h1 align="center">INVOICE Table-1</h1>
  <?php
if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (!$result = mysqli_query($connection,"SELECT * FROM porder"))
{
    die("Error: " . mysqli_error($connection));
}
?>
<table border='1'>
<tr>
<th>ItemID</th>
<th>ItemName</th>
<th>Quantity</th>
<th>price</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['quan']; ?></td>
<td><?php echo $row['price'] * $row['quan'] ; $tot = $_SESSION['total']+=$row['price'] * $row['quan']; ?></td>
</tr>

<?php
   	
}?>



</table>
<style>
  .adjust{
    margin-top: 0%;
    float: right;
    margin-right: 70px;

  }
  .adjust1{
    font-size: 100x;
  }
  #position {
    margin-top: 2%;
    margin-left: 81%;
    font-size: 20px;
  }
   .position22 {
    margin-top: 5%;
    /*margin-right: 81%;*/
    float: right;
  font-size: 70px;

  }
</style>
<div class="adjust">
<p style="font-size: 25px;">Sub-Total  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:Rs <?php echo $_SESSION['total'];?><br>
G.S.T @ 5% &nbsp:Rs <?php echo $tax= (5*$_SESSION['total'])/100?><br>
Total  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:Rs <?php echo $tax+$_SESSION['total']?><br>
</p>
</div>


<a href="index.php"><button style="float: right; margin-top: 5%;margin-right: 400px;width: 50px;">Back</button></a>
<form method="post">
  <div id="position">
    <input type="radio" name="payment" value="card">CARD &nbsp &nbsp
    <input type="radio" name="payment" value="cash">CASH<br>
    </div>
   <div class="position22">
    <input type="submit"  name="log">
    <input type="button" value="Print" onClick="window.print()">

</form>
<form>

</form>
<?php 
    
  if (isset($_POST['log'])) {

    $pay = $_POST['payment'];
  $sql = "INSERT into log (tablename, price, payment_method, datee ) values ('table-1', '$tot', '$pay', now())" ;
  $resu = mysqli_query($connection, $sql);
  $sql = "truncate table porder";
  $resu = mysqli_query($connection, $sql);
  if (!$resu) {
    echo mysqli_error($connection);
  }
  if ($resu) {
    header('Location:INT/window1.php');

    # code...
  }
}
 ?>

</body>
</html>