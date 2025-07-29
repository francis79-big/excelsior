<?
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div id="menu">
            <ul >
                <li><a href="/Excelsior/">F&#337;oldal</a></li>
                <li><a href="/Excelsior/HTML/debut.php">Bemutatkoz&aacute;s</a></li>
                <li><a href="/Excelsior/HTML/freetime.php">Szabadid&#337;</a></li>
                <li><a href="/Excelsior/HTML/gallery.php">Gal&eacute;ria</a></li>
                <li><a href="/Excelsior/HTML/rooms.php">Szob&aacute;k</a></li>
                <li><a href="/Excelsior/HTML/prices.php">&Aacute;rak</a></li>
                <li><a href="/Excelsior/HTML/contact.php">El&eacute;rhet&#337;s&eacute;g</a></li>
                
                <?php
                    if (isset($_SESSION['UserName']) ) {
                        echo '<li><a href="/Excelsior/HTML/reservation.php">Foglal&aacute;s</a></li>';
                    }else{
                        echo '<li><a href="/Excelsior/HTML/login.php">Foglal&aacute;s</a></li>';
                    }
                ?>
                <li style="border-right: 0;"><a href="/Excelsior/HTML/map.php">T&eacute;rk&eacute;p</a></li>
                <?php
                    if (isset($_SESSION['id']) ) {
                        echo '<li><a href="/Excelsior/index.php?logout=ok">Kijelentkezés</a></li>';
                    }
                ?>
            </ul>
        </div>