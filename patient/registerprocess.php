<?php
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
       
        $req="select * from patient where email='$email' || tel='$tel' || password='$password'";
        $res=mysqli_query($conn,$req);

        $nbreresultR=mysqli_num_rows($res);

        if($nbreresultR>=1){
            echo '<script>alert("Ce patient déjà existe !")</script>';
            echo '<script language="javascript">document.location.replace("patient_login.php")</script>';
        }else{ 
            $dateAdmis=date('Y-m-d H:i:s');
            echo '<script>alert("Successful registration")</script>';
            $reg="insert into patient values(null,1,'$lastname','$firstname','$age','$groupS','$sexe','$tel','$email','$adresse','$password','$dateAdmis')";
            mysqli_query($conn, $reg);
            echo '<script language="javascript">document.location.replace("patient_index.php")</script>';

        }
    }
    
?>