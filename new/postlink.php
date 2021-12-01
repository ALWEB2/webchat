<?php
session_start();
if(isset($_SESSION['name'])){
    $link = $_POST['link'];
    if (in_array($_SESSION['name'], array("Server", "server", "Serveur", "serveur"))){
        exit();
    } elseif (in_array($link, array("nigger", "n1gger", "N1gger", "Nigger", " ", "", "­", "­­"))){
    } else {
	$link_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> <a href=$link target=\"_blank\">$link</a> </div>";
    file_put_contents("log.html", $link_message, FILE_APPEND | LOCK_EX);
    }
}
?>