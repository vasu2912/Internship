<?php 
session_start();

$_SESSION['count'] = 1;
$_SESSION['count']++;
		

if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}

$sql = "UPDATE porder SET quan = $_SESSION['count'] WHERE id = ?";
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
    header("Location: index.php");
}
else
{
    echo "Couldn't delete the ID.";
}
$result->close();
$connection->close();


?>