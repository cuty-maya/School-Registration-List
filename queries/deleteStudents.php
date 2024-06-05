<?php

// require_once "/queries/config.php";
// include "./queries/config.php";
require_once "./config.php";



$id = $_GET['id'];

$stmt = "DELETE FROM `students`
WHERE id =?";

$query = $dbh->prepare($stmt);
$query->bind_param("s", $id);
$query->execute();

echo "Delete successfully";

$query->close();
$dbh->close();