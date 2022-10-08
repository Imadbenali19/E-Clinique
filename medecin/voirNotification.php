<?php
session_start();
include('../connection.php');
$numNoti=$_GET['idN'];
$res1=mysqli_query($conn,"select WhoDid idP,ForWho idM,idrendez ir from notification where idNoti='$numNoti'");
$tab=mysqli_fetch_array($res1);
$i=$tab['idP'];
$im=$tab['idM'];
$ir=$tab['ir'];
if($_GET['typeN']=='Fixer RDV'){
	$_SESSION['idPCAL']=$i;
    $_SESSION['idrdvCAL']=$ir;
    echo '<script language="javascript">document.location.replace("calendrier/index.php")</script>';

}else{
    $res=mysqli_query($conn,"select dateRdv drdv from rendezvous where idRdv='$ir'");
    $row=mysqli_fetch_row($res);
    $datedb=$row['drdv'];
	mysqli_query($conn,"delete from rendezvous where idRdv='$ir'");
    mysqli_query($conn,"delete from calendrier where datecal='$$datedb'");
    echo "<script>alert('Rendez vous numéro '+$ir+' a été annulé);</script>";
	echo '<script language="javascript">document.location.replace("medecin_index.php")</script>';
}

mysqli_query($conn,"update notification set statut='read' where idNoti='$numNoti'");

?>