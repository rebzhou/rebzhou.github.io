<?php
$field_name = $_POST['field name-box'];
$field_email = $_POST['field email-box'];
$field_message = $_POST['field msg-box'];

$mail_to = 'zhou.becca@gmail.com';
$subject = 'Message from your portfolio website '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the feedback.');
        window.location = 'main-index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact at myPersonalEmail@email.com');
        window.location = 'main-index.html';
    </script>
<?php
}

?>