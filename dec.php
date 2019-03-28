<?php
session_start();
include 'db.php';

if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$_SESSION['count']--;
	$count = $_SESSION['count'];
}
$sql = "UPDATE porder SET quan = $count WHERE id = ?";
if (!$result = $connection->prepare($sql))
{
    die('Query failed: (' . $connection->errno . ') ' . $connection->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "The ID was deleted with success.";
    header("Location: index.php");
}
else
{
    echo "Couldn't delete the ID." . mysqli_error($connection);
 
}?>