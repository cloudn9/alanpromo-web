<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= "Da: Richiesta di contatto: $email.\r\n";
    $to = 'tanuk5@hotmail.com'; 
    $subject = 'AlanPromo - richiesta di contatto dal sito ';

    $body = "Da: $name\n E-Mail: $email\n Messaggio:\n $message";
    alert($body);
    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $header)) { 
           $success = "Grazie ! La contatteremo quanto prima :)";
        } else {
            $success = ":( Purtroppo la mail non è stata inviata. Per favore riprovi ancora, grazie.";
        }
    }
?>