<?php 
session_start();
setlocale(LC_ALL, 'fr_FR');
include('../connection.php');
if($_POST['registerbtn']){
    $email=$_POST['email'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $tel=$_POST['tel'];
    $password=$_POST['password'];
    $sexe=$_POST['gender'];
    $groupS=$_POST['group'];
    $adresse=$_POST['adresse'];
    $age=$_POST['age'];
    $id=$_SESSION['idP'];

    $req="select * from patient where idP!='$id' && (email='$email' || tel='$tel' || password='$password')";
    $res=mysqli_query($conn,$req);
        
    $nbreresultR=mysqli_num_rows($res);
        
    if($nbreresultR>=1){
        echo '<script>alert("Ce patient déjà existe !")</script>';
    }else{
        echo '<script>alert("Successful update")</script>';
        $reg="update patient set nom='$lastname', prenom='$firstname',tel='$tel',email='$email',adresse='$adresse',age='$age',bloodCategory='$groupS',password='$password',sexe='$sexe' where idP='$id'";
        mysqli_query($conn, $reg);
        $description="Le patient $lastname $firstname, a modifié son compte";
        $dateNo=date('Y-m-d H:i:s');
        mysqli_query($conn, "insert into notification values(null,'admin','$description','$dateNo','unread','1','Modification','$id',null)");
        echo '<script language="javascript">document.location.replace("myprofil.php")</script>';
        
    }
}
            ?>
                    