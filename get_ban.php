<?php
    header('Content-Type: text/html; ASCII');

    include_once('core/database.php');
    include_once('print_bans.php');

    $steamid = mysqli_real_escape_string($conn, $_POST["steamid"]);

    $query =  "SELECT ban_id, timestamp, perp_steamid, perp_name, admin_name, bantime, timeleft, reason FROM CTBan_Log WHERE perp_steamid = '" . $steamid . "' ORDER BY ban_id desc";
    $result = $conn->query($query);


?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/site.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>


<?php
    include_once('navbar.php');
?>


<div class="jumbotron text-center">
<h1>CT Bans</h1>
</div>
<div class="ban-container">

<?php
    print_bans($result);
?>

</body>
</html>