<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    
    if (in_array($_SESSION['name'], array("Server", "server", "Serveur", "serveur"))){
        exit();
    } elseif (in_array($text, array(" ", "", "­", "­­"))){
    } elseif (in_array($text, array("laugh_emoji", "LAUGH_EMOJI"))){
        $text_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> <img src=https://i.kym-cdn.com/photos/images/facebook/001/923/872/8b8 alt=LAUGH_EMOJI width=50; height=50;> </div>";
        file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
    } elseif (in_array($text, array("troll_emoji", "TROLL_EMOJI"))){
        $text_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> <img src=https://icon-library.com/images/troll-face-icon/troll-face-icon-17.jpg alt=TROLL_EMOJI width=50; height=50;> </div>";
        file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
    } else {
	$text_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
    }
}
?>