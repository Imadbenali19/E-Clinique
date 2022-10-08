<?php
session_start();
include ('../connection.php');
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST["login"]))
{    
    $password=$_POST['password'];
    $username=$_POST['username'];
    $requete = "select * from administrateur where  password='$password' && login='$username'";
    $res=mysqli_query($conn,$requete);
    $nbreresult=mysqli_num_rows($res);
    
    if($nbreresult==1) // nom d'utilisateur et mot de passe correctes
    {
       $_SESSION['username'] = $username;
        echo "<script>
        alert('Welcome '+'$username');
        </script>";
        echo '<script language="javascript">document.location.replace("admin_index.php")</script>';

    }
    else
    {
       header('Location: admin_login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }
}

mysqli_close($conn); // fermer la connexion
?>