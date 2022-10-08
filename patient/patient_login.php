<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient | Sign in | Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="accountP">
         <div class="acontainer">
           <div class="row">
             <div class="Asection2">
  
                <div class="form">
                 
                  <div class="formbtn">
                     
                    <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                    <hr id="id">
                  </div>
                  
                  <form action="loginprocess.php" method="post" id="loginform">
                    <input type="text" name="email" placeholder="Entrer votre Email" required>
                    <input type="Password" name="password" placeholder="Entrer votre Password" required>
                    <input type="submit" class="Loginbtn" value="Login" name="loginbtn">
                    <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<script>alert('Utilisateur ou mot de passe incorrect')</script>";
                }
                ?>
                  </form>

                  <form  action="registerprocess.php" method="post" id="registerform">
                    <input type="text" name="lastname" id="lastname" placeholder="Entrer votre Nom" onchange="validNom()" onchange="validNom()" required value="">
                    <input type="text" name="firstname" id="firstname" placeholder="Entrer votre Prenom" onchange="validPrenom()" onchange="validPrenom()" required value="">
                    <input type="email" name="email" placeholder="Entrer votre Email" required value="">
                    <input type="Password" name="password" id="password" placeholder="Entrer votre mot de passe" onchange="validPassword()" onchange="validPassword()" required value="">
                    <input type="Password" name="confP" id="confP" placeholder="Confirmer votre mot de passe" onchange="validConfPassword()" onchange="validConfPassword()" required value="">
                    <input type="tel" name="tel" id="tel" placeholder="Entrer votre numero de telephone" onchange="validTel()" required onchange="validTel()" value="">
                    <input type="text" name="adresse" id="adresse" placeholder="Entrer votre adresse" onchange="validAdresse()" required onchange="validAdresse()" value="">
                    <input type="number" name="age" id="age" placeholder="Entrer votre age" onchange="validAge()" required onchange="validAge()" value="">
                    <select id="group" name="group">
                        <option value="A+"Groupe Sanguin : >Groupe Sanguin : A+</option>
                        <option value="A-">Groupe Sanguin : A-</option>
                        <option value="O+">Groupe Sanguin : O+</option>
                        <option value="O-">Groupe Sanguin : O-</option>
                        <option value="B+">Groupe Sanguin : B+</option>
                        <option value="B-">Groupe Sanguin : B-</option>
                        <option value="AB+">Groupe Sanguin : AB+</option>
                        <option value="AB-">Groupe Sanguin : AB-</option>
                    </select><br>
                    <select id="gender" name="gender">
                        <option value="Homme">Sexe : Homme</option>
                        <option value="Femme">Sexe : Femme</option>
                    </select><br>
                    <input type="submit" class="Loginbtn" value="Register" name="registerbtn" onclick="valid()">

                  </form>
                </div>

             </div>

           </div>

         </div>

      </div>


</body>
<script langage="javascript" src="JSPATIENTFiles/interaction1.js"></script>
<script langage="javascript" src="JSPATIENTFiles/interaction2.js"></script>
</html>