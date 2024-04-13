<?php

include '../include/config.inc.php';

$query = my_query("SELECT COUNT(*) FROM likes WHERE ")

$data = array("likes"=>1);
echo json_encode($data);
exit(0);