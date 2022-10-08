<?php
	$id=$_GET['idRdv'];
	$npat=$_GET['numP'];
	$name=$_SESSION['username'];
	setlocale(LC_ALL, 'fr_FR');
	include('../connection.php');
	mysqli_query($conn,"delete from rendezvous where idRdv='$id'");
    //Informer medecin!!!
	$idM=$_SESSION['idMedecin'];
	$description="Le medecin $name, a annulé le rendez-vous ID=$id";
    $dateNo=date('Y-m-d H:i:s');
    mysqli_query($conn, "insert into notification values(null,'patient','$description','$dateNo','unread','$npat','Cancel RDV','$idM','$id')");
	echo "<script>alert('Rendez-vous $id annulé!');</script>";
	echo '<script language="javascript">document.location.replace("medecin_index.php")</script>';
?>