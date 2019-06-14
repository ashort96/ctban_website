<?php

function print_bans($result) {

if($result->num_rows > 0) {

    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped'>";
    echo "<thead class='text-center'>";
    echo "<tr>";
    echo "<th class='ban-table-column'>SteamID:</th>";
    echo "<th class='ban-table-column'>Name:</th>";
    echo "<th class='ban-table-column'>Banned By:</th>";
    echo "<th class='ban-table-column'>Banned On (EST):</th>";
    echo "<th class='ban-table-column'>Ban Time:</th>";
    echo "<th class='ban-table-column'>Time Left:</th>";
    echo "<th class='ban-table-column-last'>Reason:</th>";
    echo "</tr>";
    echo "</thead>";

    while($row = $result->fetch_assoc()) {
        $epoch = $row["timestamp"];
        $dt = new DateTime("@$epoch");
        $timezone = new DateTimeZone('US/Eastern');
        $dt->setTimezone($timezone);
        echo "<tr class='text-center'>";
        echo "<td>" . $row["perp_steamid"] . "</td>";
        echo "<td>" . $row["perp_name"] . "</td>";
        echo "<td>" . $row["admin_name"] . "</td>";
        echo "<td>" . $dt->format('m/d/Y \@ H:i:s') . "</td>";
        if($row["bantime"] == 0) {
            echo "<td>Permanent</td>";
        } 
        else {
            echo "<td>" . $row["bantime"] . " minutes</td>";
        }
        if($row["timeleft"] == -1) {
            echo "<td>Expired</td>";
        }
        elseif($row["timeleft"] == 0) {
            echo "<td>Permanent</td>";
        }
        else {
            echo "<td>" . $row["timeleft"] . " minutes</td>";
        }
        echo "<td>" . $row["reason"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";

} else {
    echo "No results";
}

}

?>