<?php 
include 'db.php';?>
<html>
<head>
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
  <h1 align="center">Kitchen Order Tickets(Table-1)</h1>
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
<th>name</th>
<th>Quantity</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['quan']; ?></td>
</tr>
<?php
}
mysqli_close($connection);
?>
</table>
<a href="index.php"><button style="float: right; margin-top: 5%;margin-right: 700px;width: 50px;">Back</button></a>
</body>
<head>

