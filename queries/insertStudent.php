<?php

// import the database connection.
// include "./config.php";
require_once "./config.php";

//we need the items to insert to the database
$name = htmlentities($_POST['name']);
$admNo = htmlentities($_POST['admNo']);
//$doa = htmlentities($_POST['doa']);
//$createdAt = htmlentities($_POST['createdAt']);
//$isActive = htmlentities($_POST['isActive']);
// we use the htmlentities to convert all applicable characters to htmlEntities.

$stmt = "INSERT INTO students(`name`, `admNo`, `DoA`, `createdAt`, `isActive`)
 VALUES(?,?,CURDATE(),CURDATE(),1)";

$query = $dbh->prepare($stmt);
$query->bind_param("ss",$name,$admNo);
// stmt = "INSERT INTO table VALUES"

$result = $query->execute();
//Execute;

// so function execute() returns a true or false . 1 or 0, on and off

// !true 
if ($result) {
    echo "insert successful";
} else {
    echo "Not inserted successful";
}

$query->close();
$dbh->close();
// close the dbh connection




