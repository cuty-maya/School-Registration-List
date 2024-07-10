<?php

require_once "../../queries/config.php";

$name = htmlentities($_POST['name']);
$phoneNo = htmlentities($_POST['phoneNo']);
$residence = htmlentities($_POST['residence']);

$stmt = "INSERT INTO  `parents`(`name`, `phoneNo`, `residence`)
VALUE(?, ?, ?)";

$query = $dbh->prepare($stmt);
$query->bind_param("sss", $name, $phoneNo, $residence);

$result = $query->execute();

if ($result) {
    echo "insert successful";
} else {
    echo "Not inserted successful";
}

echo "<a href='/schoolapp/index.php'>Home</a>";

$query->close();
$dbh->close();
