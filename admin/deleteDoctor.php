<?php
	$id=$_GET['idDoctor'];
	$nom=$_GET['nomDoctor'];
	include('../connection.php');
	mysqli_query($conn,"delete from medecin where idM='$id'");
	echo "<script>alert('Medecin '+$nom);</script>";
	echo '<script language="javascript">document.location.replace("viewDoctors.php")</script>';
?>


