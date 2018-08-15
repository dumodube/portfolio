<?php

$name=$_POST['name'];
$email=$_POST['email'];

$message=$_POST['message'];

$email_from='alexpeo9@live.com';

$email_subject='New Form Submission';

$email_body='User Name : $name.\n';
                'User Email :$email .\n';
                    'User Message : $message .\n';

                    
$to = 'godwillzulu51@gmail.com';

$headers = 'From : $email_from \r\n';

$headers .= 'Reply-To:$email \r\n';

mail($to,$email_subject,$email_body,$headers);

header('Location : contact.html');

?>

