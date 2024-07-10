<?php

require_once "../../queries/config.php";

$name = htmlentities($_POST['name']);
$idNo = htmlentities($_POST['idNo']);
$phoneNo = htmlentities($_POST['phoneNo']);
$residence = htmlentities($_POST['residence']);
$email = htmlentities($_POST['email']);

$stmt = "INSERT INTO teachers(`name`, `idNo`, `phoneNo`, `residence`, `email`, `date_of_reg`)
 VALUES(?,?,?,?,?,CURDATE())";

$query = $dbh->prepare($stmt);
$query->bind_param("sssss",$name,$idNo,$phoneNo,$residence,$email);


$result = $query->execute();
// Execute

 
if ($result) {
    echo "insert successful";
} else {
    echo "Not inserted successful";
}

echo "<a href='/schoolapp/index.php'>Home</a>";

$query->close();
$dbh->close();




