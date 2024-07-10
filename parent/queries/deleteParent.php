<?php

require_once "../../queries/config.php";


$id = $_GET['id'];

$stmt = "DELETE FROM parents
WHERE id=?";

$query = $dbh->prepare($stmt);
$query->bind_param("s", $id);
$query->execute();

echo "Delete Successfully";

echo "<a href='/schoolapp/index.php'>Home</a>";

$query->close();
$dbh->close();