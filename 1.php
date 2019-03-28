<?php
include 'db.php';
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
<td><a href="2.php?id=<?php echo $row['id']; ?>">Delete Item</a></td>
</tr>
<?php
}
mysqli_close($connection);
?>
</table>