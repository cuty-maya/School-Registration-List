<?php

require_once  __DIR__. "/../../queries/config.php";

$id = $_GET['id'];

$stmt = "DELETE FROM `teachers`
WHERE id=?";

$query = $dbh->prepare($stmt);
$query->bind_param("s", $id);
$query->execute();


echo "Delete Successfully";

echo "<a href='/schoolapp/index.php'>Home</a>";

$query->close();
$dbh->close();