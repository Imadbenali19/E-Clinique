<?php
    session_start();
    if (isset($_GET['idDoctor'])){
        include('../connection.php');
        $id=$_GET['idDoctor'];
        $_SESSION['id']=$id;
        $query=mysqli_query($conn,"select * from medecin where idM='$id'");
        $row=mysqli_fetch_array($query);
    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | AjoutMedecin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSSFiles/style4.css">
</head>
<body>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="../home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="../Images/Logo Site.PNG" alt="Logo" title="Logo" height="120px" width="160px">
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
                </li>
            </ul>
            
        </header>
<center>
    <section>
    <h2>Ajouter un médecin</h2>
    <form  action="<?php if (isset($_GET['idDoctor'])){echo 'editDoctor.php';}else echo 'addDoctorProcess.php' ?>" method="post" id="registerform">
        <input type="text" name="lastname" id="lastname" placeholder="Entrer votre Nom" onchange="validNom()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['nom'];}?>">
        <span id="s1"></span> <br>
        <input type="text" name="firstname" id="firstname" placeholder="Entrer votre Prenom" onchange="validPrenom()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['prenom'];}?>">
        <span id="s2"></span> <br>
        <input type="email" name="email" placeholder="Entrer votre Email" required value="<?php if (isset($_GET['idDoctor'])){echo $row['email'];}?>">
        <input type="Password" name="password" id="password" placeholder="Entrer votre mot de passe" onchange="validPassword()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['password'];}?>">
        <span id="s4"></span> <br>
        <input type="Password" name="confP" id="confP" placeholder="Confirmer votre mot de passe" onchange="validConfPassword()" required value="">
        <span id="s5"></span> <br>
        <input type="tel" name="tel" id="tel" placeholder="Entrer votre numero de telephone" onchange="validTel()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['tel'];}?>">
        <span id="s6"></span> <br>
        <input type="text" name="adresse" id="adresse" placeholder="Entrer votre adresse" onchange="validAdresse()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['adresse'];}?>">
        <span id="s7"></span> <br>
        <input type="text" name="fee" id="fee" placeholder="Entrer les frais de rendez-vous" onchange="validFee()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['fee'];}?>">
        <span id="s8"></span> <br>
        <input list="spec" id="sp" placeholder="Entrer votre spécialité" name="sp" onchange="validSpecialite()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['specialite'];}?>">
        <span id="s9"></span> <br>
        <datalist id="spec">
            <option value=" L’allergologie">
            <option value="L’anesthésiologie">
            <option value="La cardiologie">
            <option value="La chirurgie">
            <option value="La neurochirurgie">
            <option value="La radiothérapie">
            <option value="La gériatrie">
            <option value="La gynécologie">
            <option value="La néphrologie">
        </datalist><br>
        <input type="submit" class="Loginbtn" id="envoyer" name="registerbtn" onclick="valid()" value="<?php if (isset($_GET['idDoctor'])){echo 'Edit';}else echo 'Submit' ?>">


    </form>
    
    </section></center>


			
</body>
<script src="AdminJSFILES/interaction4.js"></script>
</html>