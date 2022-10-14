<?php

    if (isset ($_POST)['submit']) {
        $mail = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "justinross28@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have a message" .$name".\n\n".$message;

        mail($mailTo, $txt, $headers);

        header("Location: index.html?MessageSent");
    }


?>