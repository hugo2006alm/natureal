<?php
include '../include/config.inc.php';
$query = my_query("SELECT * FROM posts ORDER BY id DESC LIMIT 20"); 

echo json_encode($query);