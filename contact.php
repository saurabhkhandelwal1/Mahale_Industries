<?php>
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

    $email_from='contact@mahaleindustries.com';
    $email_subject="New Form Submission";
    $email_body="User Name:$name.\n"."User Email=$visitor_email.\n"."Message=$message."\n;

    $to="mahaleindustries@gmail.com";
    $headers="From:$email_from \r\n";
    $headers="Reply-To:$visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location:index.html");


?>
        