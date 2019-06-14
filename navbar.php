<nav class="navbar navbar-expand-sm bg-dark navbar-dark">


<!-- Links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <?php
            if($_SERVER["REQUEST_URI"] == "/ctbans/" || $_SERVER["REQUEST_URI"] == "/ctbans/index.php") {
                echo "<a class='nav-link active' href='.'>Home</a>";
            }
            else {
                echo "<a class='nav-link' href='.'>Home</a>";
            }
        ?>
    </li>
    <li class="nav-item">
        <?php
            if($_SERVER["REQUEST_URI"] == "/ctbans/temp_bans.php") {
                echo "<a class='nav-link active' href='temp_bans.php'>Temporary Bans</a>";
            }
            else {
                echo "<a class='nav-link' href='temp_bans.php'>Temporary Bans</a>";                
            }
        ?>
    </li>
    <li class="nav-item">
        <?php
            if($_SERVER["REQUEST_URI"] == "/ctbans/perm_bans.php") {
                echo "<a class='nav-link active' href='/perm_bans.php'>Permanent Bans</a>";
            }
            else {
                echo "<a class='nav-link' href='perm_bans.php'>Permanent Bans</a>";                
            }
        ?>
    </li>
    <li class="nav-item">
        <?php
            if($_SERVER["REQUEST_URI"] == "/ctbans/expired_bans.php") {
                echo "<a class='nav-link active' href='expired_bans.php'>Expired Bans</a>";
            }
            else {
                echo "<a class='nav-link' href='expired_bans.php'>Expired Bans</a>";                
            }
        ?>
    </li>
</ul>

</nav>
