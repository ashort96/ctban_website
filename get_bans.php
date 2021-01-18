<?php

include_once('print_bans.php');


function get_temp_bans($offset, $records_per_page) {   
    include("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft >= 1 ORDER BY ban_id desc LIMIT ". $offset . ", " . $records_per_page;
    $result = $conn->query($query);
    print_bans($result);

}

function get_number_temp_bans() {
    include("core/database.php");
    $query = "SELECT COUNT(*) FROM CTBan_Log WHERE timeleft >= 1";
    $result = $conn->query($query);
    $num_entires = mysqli_fetch_array($result)[0];
    return $num_entires;
}

function get_perm_bans($offset, $records_per_page) {

    include("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft = 0 ORDER BY ban_id desc LIMIT " . $offset . ", " . $records_per_page;
    $result = $conn->query($query);
    print_bans($result);
}

function get_number_perm_bans() {
    include("core/database.php");
    $query = "SELECT COUNT(*) FROM CTBan_Log WHERE timeleft = 0";
    $result = $conn->query($query);
    $num_entires = mysqli_fetch_array($result)[0];
    return $num_entires;
}

function get_expired_bans($offset, $records_per_page) {
    include("core/database.php");
    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE timeleft = -1 ORDER BY ban_id desc LIMIT " . $offset . ", " . $records_per_page;
    $result = $conn->query($query);
    print_bans($result);
}

function get_number_expired_bans() {
    include("core/database.php");
    $query = "SELECT COUNT(*) FROM CTBan_Log WHERE timeleft = -1";
    $result = $conn->query($query);
    $num_entires = mysqli_fetch_array($result)[0];
    return $num_entires;
}

?>