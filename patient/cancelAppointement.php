<?php
	$id=$_GET['idRdv'];
	$nmed=$_GET['numM'];
	$name=$_SESSION['username'];
	setlocale(LC_ALL, 'fr_FR');
	include('../connection.php');
    //Informer medecin!!!
	$numP=$_SESSION['idPatient'];
	$description="Le patient $name a annulé le rendez-vous ID=$id";
    $dateNo=date('Y-m-d H:i:s');
    mysqli_query($conn, "insert into notification values(null,'medecin','$description','$dateNo','unread','$nmed','Cancel RDV','$numP','$id')");
	echo "<script>alert('En attente de la validation du medecin!');</script>";
	echo '<script language="javascript">document.location.replace("patient_index.php")</script>';
?>