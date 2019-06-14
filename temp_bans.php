<?php
    include_once('core/global.php');
    include_once('get_bans.php');
?>
<!DOCTYPE html>
<html>
<head>

<?php
    include_once("title.php");
    include_once("styles.php");
?>

</head>

<body>

    <?php
        include_once('navbar.php');
        include_once('jumbotron.php');
    ?>
    <?php
        get_temp_bans();
    ?>


</body>


</html>