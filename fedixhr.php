<?php
/* file that will process all ajax/xhr requests  */

// load basic config files
require_once("inc/fediverse.config.inc.php");
// include fundamental stuff
require_once("inc/load-libs.inc.php");

// header ("Content-Type:text/xml");
header('Content-Type: application/xml; charset=utf-8');

$xhr_action = (isset($_POST["action"]) ? $_POST["action"] : "");


$action_inc = "./inc/xhr/".$xhr_action.".xhr.php";
$xml_return_code = "ERROR";
$xml_return_description = "Default error message.";

echo '<?xml version="1.0" encoding="UTF-8" ?>';

if (file_exists($action_inc) && in_array($xhr_action, $xhr_allowed_actions)){
    require_once($action_inc);
}else{
    $xml_return_code = "ERROR";
    $xml_return_description = "Action requested could not be founded or is not allowed:".$xhr_action;
}

echo "<result><code>".$xml_return_code."</code><description>".$xml_return_description."</description></result>";

?>
