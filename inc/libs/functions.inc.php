<?php
/* General useful functions  */


/**
 * Return a 'smart' string about how long since a date
 * @param $t  timestamp
 */
function date_ago($t){
	$founddate_ts = $t;
	$actual_time = time();
	$ret_time = "";
	$diff_seconds = $actual_time - $founddate_ts; // seconds
	$diff_minutes = $diff_seconds / 60; // minutes
	$diff_minutes = round($diff_minutes);	
	$diff_hours = $diff_minutes / 60; // hours
	$diff_hours = round($diff_hours);
	$diff_days = $diff_hours / 24; // days
	$diff_days = round($diff_days);
	if ($diff_seconds<=60){
		$ret_time = $diff_seconds." second(s) ago";
	}elseif ($diff_minutes<=60){
		$ret_time = $diff_minutes." minute(s) ago";
	}elseif ($diff_hours<24){
		$ret_time = $diff_hours." hour(s) ago";
	}else{
		$ret_time = $diff_days." day(s) ago";
	}
	return $ret_time;
}

/**
 * function to select the correct html menu item
 */
function menu_sel($sec, $param, $with_class=false){
    $ret = "";
    if ($sec == $param){
        if ($with_class){
            $ret = "class='active'";
        }else{
            $ret = "active";
        }
    }
    return $ret;
}

?>
