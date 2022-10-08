<?php
session_start();
session_destroy();
$user=$_SESSION['username'];
echo "<script>alert('Au revoir '+'$user');</script>";
echo '<script language="javascript">document.location.replace("home.php")</script>';


?>
