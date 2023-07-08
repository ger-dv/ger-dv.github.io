<?php

    $to = "ger.diazvielma@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "Nuevo mensaje de la web gdiaz.tk";

    $fields = array();
    $fields{"name"} = "Nombre";
    $fields{"email"} = "Email";
    $fields{"phone"} = "Tel.";
    $fields{"message"} = "Mensaje";

    

    $body = "Esto es lo que escribieron:\r\n"; 

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    $send = mail($to, $subject, $body, $headers);

?>