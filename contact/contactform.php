<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $massage = $_POST['massage'];

        $mailTo = "pijacaauto9@gmail.com";
        $headers = "From: ". $mailFrom;
        $txt ="You have recived an e-mail from ".$name.".\n\n".$massage;

        mail($mailTo, $subject, $txt, $headers);
         header("Location: ../index.html.php?mailsent");
    }
?>