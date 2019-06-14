<?php
    include_once('core/global.php');
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

    <div class="container">
        <form action="get_ban.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="steamid" name="steamid" aria-describedby="" placeholder="Enter SteamID">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

</body>

</html>