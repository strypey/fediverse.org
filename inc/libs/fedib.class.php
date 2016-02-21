<?php
/**
 * Class to handle the Fediverse SQLite database
 */
class Fedib extends SQLite3{
    
    function __construct($fedverse_db){
        $this->open($fedverse_db);
    }


    /* method to get the geoip data for the geoip db instance */
    /* based on the code from Andreas Gohr  */
    /* http://www.splitbrain.org/blog/2011-02/12-maxmind_geoip_db_and_sqlite  */
    public function get_geoipdata($ip){
        $ip_long = ip2long($ip);
        if ($ip_long == -1 || $ip_long === FALSE) return false;
        
        $SQL_Q = "SELECT loc.* FROM geolocation loc, geoblocks blk";
        $SQL_Q .= " WHERE blk.idx = (".$ip_long."-(".$ip_long." % 65536))";
        $SQL_Q .= " AND blk.startIpNum < ".$ip_long." AND blk.endIpNum > ".$ip_long;
        $SQL_Q .= " AND loc.locId = blk.locId;";

        $geodata = $this->querySingle($SQL_Q, true);

        return $geodata;
    }

    
    public function get_nodes_count(){
        $sql_q = "SELECT count(*) FROM fediverse_nodes";
        $res = $this->querySingle($sql_q);
        return $res;
    }
    
    public function get_nodes($node_id=NULL, $get_values="*"){
        
        $sql_q = "SELECT ".$get_values." FROM fediverse_nodes";

        // select node_id or node_url to query
        
        if(isset($node_id) && !empty($node_id)){            
            if (FALSE === stristr($node_id, 'http')){ 
                $sql_q .= " WHERE node_id=".$node_id;
            }else{
                $sql_q .= " WHERE node_uri='".$node_id."'";
            }
        }


        $res = $this->query($sql_q);
        $nodes = Array();

        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
            $nodes[] = $row;
        }

        return $nodes;
        
    }


    public function update_node($node){
        // build set statement
        $update_str = "";
        foreach ($node as $node_key => $node_value){
            if ('node_id'  != $node_key){
                if (!empty($update_str)) $update_str .= ",";
                $update_str .= $node_key."='".$node_value."'";
            }
        }
        // build update sql
        $sql_u = "UPDATE fediverse_nodes SET ".$update_str;
        $sql_u .= " WHERE node_id=".$node["node_id"];
        
        return $this->exec($sql_u);
        
        
    }

}

?>
