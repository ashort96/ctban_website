<?php

function pagination($page, $total_pages) {
    // First 
    if ($page == 1) {
        echo "<li class='page-item disabled'>";
        echo "<a class='page-link'>First</a>";
        echo "</li>";
    }

    else {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=1'>First</a>";
        echo "</li>";
    }

    // FIRST

    if (($page - 1) < 1) {
        echo "<li class='page-item active'>";
        echo "<a class='page-link'>" . $page . "</a>";
        echo "</li>";
    }
    elseif (($page + 1) > $total_pages) {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page - 2) . "'>" . ($page - 2) . "</a>";
        echo "</li>";                    
    }
    else {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page - 1) . "'>" . ($page - 1) . "</a>";
        echo "</li>";
    }

    // SECOND
    if (($page - 1) < 1) {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page + 1) ."'>" . ($page + 1) . "</a>";
        echo "</li>";
    }
    elseif (($page + 1) > $total_pages) {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page - 1) . "'>" . ($page - 1) . "</a>";
        echo "</li>";                   
    }
    else {
        echo "<li class='page-item active'>";
        echo "<a class='page-link' href='?page=" . $page . "'>" . $page . "</a>";
        echo "</li>";
    }

    // THIRD
    if (($page - 1) < 1)
    {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page + 2) . "'>" . ($page + 2) . "</a>";
        echo "</li>";
    }
    elseif (($page == $total_pages)) {
        echo "<li class='page-item active'>";
        echo "<a class='page-link' href='?page=" . $page . "'>" . $page . "</a>";
        echo "</li>";                    
    }
    else {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . ($page + 1) . "'>" . ($page + 1) . "</a>";
        echo "</li>";
    }

    if (($page == $total_pages))
    {
        echo "<li class='page-item disabled'>";
        echo "<a class='page-link'>Last</a>";
        echo "</li>";                    
    }
    else {
        echo "<li class='page-item'>";
        echo "<a class='page-link' href='?page=" . $total_pages . "'>Last</a>";
        echo "</li>";                    
    }


}

?>