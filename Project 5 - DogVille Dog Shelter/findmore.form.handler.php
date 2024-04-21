<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    $email_from = 'sec.antoine@gmail.com';

    $email_subject = "Dogville New Submission";

    $email_body = "User Name: $Name.\n".
                    "User E-mail: $Email.\n".
                    "User Message: $Message.\n".

    $to = "marwan.hasrouny@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $Email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: form.html");

?>