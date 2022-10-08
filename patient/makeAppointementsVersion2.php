<?php
session_start();
    include ("../connection.php");
    setlocale(LC_ALL, 'fr_FR');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixer Rendez-vous</title>
</head>
<body>
    <?php 
        if(isset($_GET['idDoctor'])){
            $req2=mysqli_query($conn,"select count(*) as 'nbTotal' from rendezvous");
            $row2=mysqli_fetch_array($req2);
            $idD=$_GET['idDoctor'];
            $idrdv=$row2['nbTotal']+1;
            $numP=$_SESSION['idPatient'];
            $des=$_GET['valeur'];
            $req="insert into rendezvous values ('$idrdv','$numP','$idD','$des',null,null)";
            mysqli_query($conn,$req);
            // echo 'Id rendez vous : '.$idrdv; echo '<br>';
            // echo 'Id pateitn : '.$numP; echo '<br>';
            // echo 'Id medecin : '.$idD;echo '<br>';
            // echo 'descriptio : '.$des;echo '<br>';
            $name=$_SESSION['username'];
            $description="Le patient $name a demandé la fixation d\'un rendez-vous";
            $dateNo=date('Y-m-d H:i:s');
            mysqli_query($conn,"insert into notification values(null,'medecin','$description','$dateNo','unread','$idD','Fixer RDV','$numP','$idrdv')");
            
            echo "<script>
            alert('fait');
            </script>";
            echo '<script language="javascript">document.location.replace("searchDoctors.php")</script>';
            }
    ?>
</body>
</html>