<?php
session_start();
include ('../connection.php');
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST["loginbtn"]))
{    
    $password=$_POST['password'];
    $email=$_POST['email'];
    $requete = "select * from patient where  password='$password' && email='$email'";
    $res=mysqli_query($conn,$requete);
    $nbreresult=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    if($nbreresult==1) // nom d'utilisateur et mot de passe correctes
    {
       $_SESSION['nomC'] = $row['nom'].' '.$row['prenom'];
       $username=$_SESSION['nomC'];
       $_SESSION['idPatient']=$row['idP'];
        echo "<script>
        alert('Welcome '+'$username');
        </script>";
        echo '<script language="javascript">document.location.replace("patient_index.php")</script>';

    }
    else
    {
       header('Location: patient_login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }
}

mysqli_close($conn); // fermer la connexion
?>