<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Clinique | MedecinSignIn</title>
    <script langage="javascript" src="../JSFiles/interaction1.js"></script>
    <link rel="stylesheet" href="../CSSFiles/style5.css">
    <link rel="stylesheet" href="../CSSFiles/style3.css">

</head>

<body>
	<div id="container">
            
            <form action="loginprocess.php" method="POST">
                <center>
                <img src="../Images/doctorIcon.png" alt="" height="200px" width="200px">
                </center>
                <input type="text" placeholder="Entrer votre nom" name="username" required>

                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' name="login" value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
</body>