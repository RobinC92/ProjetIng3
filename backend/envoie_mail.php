<?php
 
    session_start();   

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
 
    $from = "test@eceamazon.com";
    $to = $_SESSION['email'];
    $subject = "Vérification PHP mail"; 
    $message = "PHP mail marche";
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
?>