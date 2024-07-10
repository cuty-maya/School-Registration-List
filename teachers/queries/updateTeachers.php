<?php

require_once  __DIR__. "/../../queries/config.php";

$name = $_POST['name'];
$phoneNo = $_POST['phoneNo'];
$idNo = $_POST['idNo'];

$id = $_POST["id"];


$stmt = "UPDATE teachers SET `name`=?, `phoneNo`=?,`idNo`=?
WHERE id=?";


$query = $dbh->prepare($stmt);
$query->bind_param("ssss",$name,$phoneNo,$idNo,$id);
$query->execute();


echo "Update Successfully";

echo "<a href='/schoolapp/index.php'>Home</a>";

$query->close();
$dbh->close();