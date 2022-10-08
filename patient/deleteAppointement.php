<?php
	$id=$_GET['idRdv'];
	include('../connection.php');
	mysqli_query($conn,"delete from rendezvous where idRdv='$id'");
	echo "<script>alert('Rendez vous $id a été supprimé');</script>";
	echo '<script language="javascript">document.location.replace("patient_index.php")</script>';
?>