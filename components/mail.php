<?php
  function mailTo($email, $address, $totalValue, $time, $preDefMail){
    $user = "$email";
    $owner = 'magamag268@gmail.com';

    $subject = 'PHP test mail';

    $notifyCustomer = `
      Email of customer: $email \n
      Delivery address: $address \n
      Total: € $totalValue \n
      Delivery will arive in: $time
    `;

    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Maga <info@address.com>' . "\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";

    mail($user, $subject, $notifyCustomer, $headers);
    mail($owner, $subject, $preDefMail, $headers);
  }
