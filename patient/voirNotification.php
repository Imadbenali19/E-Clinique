<?php
session_start();
include('../connection.php');
$numNoti=$_GET['idN'];

echo '<script language="javascript">document.location.replace("patient_index.php")</script>';

mysqli_query($conn,"update notification set statut='read' where idNoti='$numNoti'");

?>