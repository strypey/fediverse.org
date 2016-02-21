<?php
// add node backend

$node_url = $_REQUEST["node_url"];

$fh = fopen("./nodes-to-add.txt", "a");
fwrite($fh, $node_url."\r\n");
fclose();

// init
// $fedib = new Fedib(FEDIVERSE_DB); // fediverse sqlite database handler
// $fediverse = new Fediverse(); // instance to handle communication with nodes

$xml_return_code = "OK";
$xml_return_description = "Thanks for sharing. We will add the node ASAP :>)";



?>
