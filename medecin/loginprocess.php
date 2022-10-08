<?php
session_start();
include ('../connection.php');
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST["login"]))
{    
    $password=$_POST['password'];
    $username=$_POST['username'];
    $requete = "select * from medecin where  password='$password' && nom='$username'";
    $res=mysqli_query($conn,$requete);
    $nbreresult=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    if($nbreresult==1) // nom d'utilisateur et mot de passe correctes
    {
       $_SESSION['nomM'] = $row['nom'].' '.$row['prenom'];
       $username=$_SESSION['nomM'];
       $_SESSION['idMedecin']=$row['idM'];
        echo "<script>
        alert('Welcome '+'$username');
        </script>";
        echo '<script language="javascript">document.location.replace("medecin_index.php")</script>';

    }
    else
    {
       header('Location: medecin_login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }
}

mysqli_close($conn); // fermer la connexion
?>