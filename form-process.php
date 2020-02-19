<?php
//if(isset($_POST['submit'])){
  //  $name = $_POST['name'];
    //$email = $_POST['email'];
    //$message = $_POST['message'];
    //$header = 'MIME-Version: 1.0' . "\r\n";
    //$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$header .= "Da: Richiesta di contatto: $email.\r\n";
    //$to = 'tanuk5@hotmail.com'; 
    //$subject = 'AlanPromo - richiesta di contatto dal sito ';    

  //  $body = "Da: $name\n E-Mail: $email\n Messaggio:\n $message";    
    //if ($_POST['submit']) {
      //  if (mail($to, $subject, $body, $header)) { 
        //   $success = "Grazie ! La contatteremo quanto prima :)";
        //} else {
          //  $success = ":( Purtroppo la mail non è stata inviata. Per favore riprovi ancora, grazie.";
        //}
    //}
    //mail($to, $subject, $body, $header);
    //mail($email, $subject, $body, $header);
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//}

if(isset($_POST['submit'])){
    $to = "tanuk5@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];    
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
