<?php

require_once "./queries/config.php";

$stmt = "SELECT * FROM students";
$students = $dbh->query($stmt);


return ($students);
