<?php
	$id=$_GET['idPatient'];
	$nom=$_GET['nomPatient'];
	include('../connection.php');
	mysqli_query($conn,"delete from patient where idP='$id'");
	echo "<script>alert('Patient '+$nom);</script>";
	echo '<script language="javascript">document.location.replace("viewPatients.php")</script>';
?>