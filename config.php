<?php
	require 'vendor/autoload.php';
   
	$con = new MongoDB\Client;
    $db = $con->assign;
    $table = $db->table;

   
?>
