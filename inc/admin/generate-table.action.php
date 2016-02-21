<?php
/** 
 * Process to regenerate the table that is shown in the frontend
 */

// init
$fedib = new Fedib(FEDIVERSE_DB); // fediverse sqlite database handler
$fediverse = new Fediverse(); // instance to handle communication with nodes

// after all nodes are processed lets generate the html table to include in frontend
$ret = $fediverse->generate_html($fedib->get_nodes());

if (FALSE !== $ret){
    echo ">OK! Table generation was a success".DEBUG_NEWLINE;
}else{
    echo ">Ups! Table generation did not went ok dude...".DEBUG_NEWLINE;
}

// db close
$fedib->close();


?>
