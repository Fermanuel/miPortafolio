<?php

$resend = Resend::client('re_PxE8v9RD_ChuFRpX81jyxH9rvfh1x1PmH');

$resend->emails->send([
  'from' => 'onboarding@resend.dev',
  'to' => 'manuelhola9@gmail.com',
  'email' => $_POST['email'],
  'name' => $_POST['name'],
  'subject' => $_POST['subject'],
  'html' => '<p>' . $_POST['message'] . '</p>'
]);