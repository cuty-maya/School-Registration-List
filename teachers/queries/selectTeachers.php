<?php

require_once __DIR__. "/../../queries/config.php";

$stmt = "SELECT * FROM teachers";
$teachers = $dbh->query($stmt);


return ($teachers);
