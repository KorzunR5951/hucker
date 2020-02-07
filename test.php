<?php

$to = 'rkorzun2020@gmail.com';
$subject = 'This is me';
$message = '<h1>Hi there</h1>';

$headers = "From: Pool R. <rp51@k-state.edu>\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);