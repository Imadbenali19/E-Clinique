<?php

include('../connection.php');
setlocale(LC_ALL, 'fr_FR');
$id=$_GET['idMedecin'];
$lastname=$_GET['nomMedecin'];
$firstname=$_GET['prenomMedecin'];
$description="Le medecin $lastname $firstname, a demandé de supprimer son compte";
$dateNo=date('Y-m-d H:i:s');
mysqli_query($conn, "insert into notification values(null,'admin','$description','$dateNo','unread','1','Suppression','$id',null)");
echo '<script language="javascript">alert("Demande envoyée!")</script>';
echo '<script language="javascript">document.location.replace("myprofil.php")</script>';

?>