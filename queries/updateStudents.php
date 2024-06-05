<?php 

require_once "./config.php";

$name = $_POST['name'];
$admNo = $_POST['admNo'];

$id = $_POST["id"];

$stmt = "UPDATE students SET `name`=?, `admNo`=?
        WHERE id=?";

$query = $dbh->prepare($stmt);
$query->bind_param("sss",$name,$admNo,$id);
$query->execute();

echo "Updated successfully";

$query->close();
$dbh->close();
