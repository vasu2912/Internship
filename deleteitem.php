<?php
include 'db.php';
if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}
$sql = "DELETE FROM porder WHERE id = ?";
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
    echo "Couldn't delete the ID.";
}
$result->close();
$connection->close();