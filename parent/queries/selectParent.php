<?php

require_once __DIR__. "/../../queries/config.php";


$stmt = "SELECT * FROM  parents";
$parents = $dbh->query($stmt);

return ($parents);