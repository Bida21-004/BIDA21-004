<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $messsage = $_POST['message'];


    $email_from = 'bida21-004@thuto.bac.ac.bw';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";


    $to = "thuogrey@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: Home.html");


?>