<?php
    session_start();
    include ("../connection.php");
    if(isset($_POST['btn_submit'])){
        $idrdv=$_POST['idrdv'];
        $temp=$_POST['temp'];
        $poids=$_POST['poids'];
        $med=$_POST['med'];
        $res=mysqli_query($conn,"select * from detailrendezvous where idRdv='$idrdv'");
        $nb=mysqli_num_rows($res);
        if($nb==0){
            echo '<script>alert("Rendez-vous inexistant!")</script>';
            header("Location: Rapports.php?temp=$temp&poids=$poids&med=$med");;
        }else{
            mysqli_query($conn,"insert into from detailrendezvous values(null,'$idrdv','$temp','$poids','$med')");
            echo '<script>alert("Detail du rendez-vous ajouté!")</script>';
            echo '<script language="javascript">document.location.replace("Rapports.php")</script>';
        }

    }
?>