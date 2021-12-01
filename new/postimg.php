<?php
session_start();
if(isset($_SESSION['name'])){
    $img = $_POST['img'];
    if (in_array($_SESSION['name'], array("Server", "server", "Serveur", "serveur"))){
        exit();
    } elseif (in_array($img, array("nigger", "n1gger", "N1gger", "Nigger"))){
    } else {
	$img_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> <img src=$img alt=$img style=max-height:256px; max-width: 144px;> </div>";
    file_put_contents("log.html", $img_message, FILE_APPEND | LOCK_EX);
    }
}
?>