<?php
// check if node_url is up

$node_url = "";

// init
$fedib = new Fedib(FEDIVERSE_DB); // fediverse sqlite database handler
$fediverse = new Fediverse(); // instance to handle communication with nodes


var_dump($fediverse->is_up());
die();
$xml_return_code = "OK";
$xml_return_description = "Node is up :>)";



?>
