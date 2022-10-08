<?php

include('../connection.php');
$idPatientModifie=-1;
$idMedecinModifie=-1;
$numNoti=$_GET['idN'];
$res1=mysqli_query($conn,"select WhoDid idP,Description d from notification where idNoti='$numNoti'");
$tab=mysqli_fetch_array($res1);
$i=$tab['idP'];
$n=$tab['d'];
$nom="";
$j=11;
while ($n[$j] != ',') {
	$nom.=$n[$j];
	$j++;
}
if($_GET['typeN']=='Suppression'){
	?>
	<html>
		<script>
			alert("Supprimer utilisateur de id <?php echo $i; ?>");
		</script>
	</html>
    <?php
	if ($n[3]=='p') {
		mysqli_query($conn,"delete from patient where idP='$i'");
	}else{
		mysqli_query($conn,"delete from medecin where idM='$i'");
	}
	
	echo '<script language="javascript">document.location.replace("admin_index.php")</script>';

}else{
	
	if ($n[3]=='p') {
		$idPatientModifie=$i;
		header("Location: viewPatients.php?idPa=$idPatientModifie");
		
	}else{
		$idMedecinModifie=$i;
		header("Location: viewDoctors.php?idMe=$idMedecinModifie");
	}

}

mysqli_query($conn,"update notification set statut='read' where idNoti='$numNoti'");

?>