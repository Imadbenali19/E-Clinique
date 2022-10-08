<?php

session_start();

if(isset($_POST['send'])){

$email=$_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// $ecommerceEmail='benali.ib19@gmail.com';


$ebody="Client Email : $email \n".
          "Client Name : $name \n".
            "Client subject : $subject \n".
              "Client Message : $message \n";

$to='benali.ib19@gmail.com';

$header="From : $to \r\n";
$header="Reply-To : $email \r\n";

mail($to, $subject, $ebody, $header);
header('location:contact.php');
}
?>
