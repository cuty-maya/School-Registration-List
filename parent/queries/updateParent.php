<?php

require_once  __DIR__.  "/../../queries/config.php";

$name = $_POST['name'];
$phoneNo = $_POST['phoneNo'];
$residence = $_POST['residence'];

$id = $_POST['id'];

$stmt = "UPDATE parents SET `name`=?, `phoneNo`=?, `residence`=?
WHERE id=?";

$query = $dbh->prepare($stmt);
$query->bind_param("ssss", $name, $phoneNo, $residence,$id);
$query->execute();

echo "Update Successfully";

echo "<a href='/schoolapp/index.php'>Home</a>";


$query->close();
$dbh->close();

