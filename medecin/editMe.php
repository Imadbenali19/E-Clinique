<?php 
session_start();
include('../connection.php');
setlocale(LC_ALL, 'fr_FR');
if($_POST['registerbtn']){
    $email=$_POST['email'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $tel=$_POST['tel'];
    $password=$_POST['password'];
    $spec=$_POST['sp'];
    $adresse=$_POST['adresse'];
    $fee=$_POST['fee'];
    $id=$_SESSION['idM'];

    $req="select * from medecin where idM!='$id' && (email='$email' || tel='$tel' || password='$password')";
    $res=mysqli_query($conn,$req);
        
    $nbreresultR=mysqli_num_rows($res);
        
    if($nbreresultR>=1){
        echo '<script>alert("Ce medecin déjà existe !")</script>';
    }else{
        echo '<script>alert("Successful update")</script>';
        $reg="update medecin set nom='$lastname', prenom='$firstname',tel='$tel',email='$email',adresse='$adresse',fee='$fee',specialite='$spec',password='$password' where idM='$id'";
        mysqli_query($conn, $reg);
        $name=$_SESSION['username'];
        $description="Le medecin $name, a modifié son compte";
        $dateNo=date('Y-m-d H:i:s');
        mysqli_query($conn, "insert into notification values(null,'admin','$description','$dateNo','unread','1','Modification','$id',null)");
        echo '<script language="javascript">document.location.replace("myprofil.php")</script>';
        
    }
}
            ?>
                    