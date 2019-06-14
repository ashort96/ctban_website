<?php
    include_once('core/global.php');
    include_once('get_bans.php');
?>
<!DOCTYPE html>
<html>
<head>

<?php
    echo "<title>";
    echo $GROUP_NAME . " - Perm CT Bans";
    echo "</title>";
    include_once("styles.php");
?>

</head>

<body>

    <?php
        include_once('navbar.php');
        include_once('jumbotron.php');
    ?>
    
    <?php
        get_perm_bans();
    ?>


</body>


</html>