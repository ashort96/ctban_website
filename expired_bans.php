<?php
    include_once('core/global.php');
    include_once('get_bans.php');
    include_once('pagination.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $records_per_page = 15;
    $offset = ($page - 1) * $records_per_page;
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
    
    <?php
        $num_bans = get_number_expired_bans();
        $total_pages = ceil($num_bans / $records_per_page);
        
        if ($page > $total_pages) {
            $page = $total_pages;
            $offset = ($page - 1) * $records_per_page;
        }


        elseif ($page < 1) {
            $page = 1;
            $offset = ($page - 1) * $records_per_page;
        }
    ?>
    <div class='ban-container'>
        <ul class="pagination justify-content-end">
            <?php
                pagination($page, $total_pages);
            ?>
        </ul>
        <?php get_expired_bans($offset, $records_per_page); ?>
    </div>

</body>
</html>