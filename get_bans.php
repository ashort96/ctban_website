<?php

include_once('print_bans.php');

function get_temp_bans() {   
    require_once("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft >= 1 ORDER BY ban_id desc";
    $result = $conn->query($query);
    print_bans($result);

}

function get_perm_bans() {
   require_once("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft = 0 ORDER BY ban_id desc";
    $result = $conn->query($query);
    print_bans($result);
}

function get_expired_bans() {
    require_once("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft = -1 ORDER BY ban_id desc";
    $result = $conn->query($query);
    print_bans($result);
}

?>