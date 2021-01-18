<?php
    include_once('core/global.php');
    include_once('core/database.php');
    include_once('print_bans.php');

    $steamid = mysqli_real_escape_string($conn, $_GET["steamid"]);


    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE perp_steamid = '" . $steamid . "' ORDER BY ban_id desc";
    $result = $conn->query($query);


?>
<!DOCTYPE html>
<html>
<head>

<?php
    include_once("title.php");
    include_once("styles.php");
?>

</head>

<body class="bg-dark">


<?php
        include_once('navbar.php');
        include_once('jumbotron.php');
?>
    
<div class='ban-container'>
<?php
    print_bans($result);
?>
</div>

</body>
</html>