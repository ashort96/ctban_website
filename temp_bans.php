<?php
    include_once('core/global.php');
    include_once('get_bans.php');
?>
<!DOCTYPE html>
<html>
<head>

<?php
    echo "<title>";
    echo $GROUP_NAME . " - Temporary CT Bans";
    echo "</title>";
    include_once("styles.php");
?>

</head>

<body>

    <?php
        include_once('navbar.php');
        include_once('jumbotron.php');
    ?>
    <div class="ban-container">
        <?php
            get_temp_bans();
        ?>
    </div>


</body>


</html>