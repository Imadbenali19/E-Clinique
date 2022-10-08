<?php
    session_start();
    if (isset($_GET['idMedecin'])){
        include('../connection.php');
        $id=$_GET['idMedecin'];
        $_SESSION['idM']=$id;
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
    <title>Medecin | Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../patient/style1.css">
</head>
<body>

<div class="accountP">
     <div class="acontainer">
       <div class="row">
         <div class="Asection2">

            <div class="form">
              <form  action="EditMe.php" method="post" id="registerform">
                <input type="text" name="lastname" id="lastname" placeholder="Entrer votre Nom" onchange="validNom()" onchange="validNom()" required value="<?php echo $row['nom'];?>">
                <input type="text" name="firstname" id="firstname" placeholder="Entrer votre Prenom" onchange="validPrenom()" onchange="validPrenom()" required value="<?php echo $row['prenom'];?>">
                <input type="email" name="email" placeholder="Entrer votre Email" required value="<?php echo $row['email'];?>">
                <input type="Password" name="password" id="password" placeholder="Entrer votre mot de passe" onchange="validPassword()" onchange="validPassword()" required value="<?php echo $row['password'];?>">
                <input type="Password" name="confP" id="confP" placeholder="Confirmer votre mot de passe" onchange="validConfPassword()" onchange="validConfPassword()" required value="">
                <input type="tel" name="tel" id="tel" placeholder="Entrer votre numero de telephone" onchange="validTel()" required onchange="validTel()" value="<?php echo $row['tel'];?>">
                <input type="text" name="adresse" id="adresse" placeholder="Entrer votre adresse" onchange="validAdresse()" required onchange="validAdresse()" value="<?php echo $row['adresse'];?>">
                <input type="number" name="fee" id="fee" placeholder="Entrer votre frais RDV" onchange="validFee()" required onchange="validFee()" value="<?php echo $row['fee'];?>">
                <input list="specs" id="sp" placeholder="Entrer votre spécialité" name="sp" onchange="validSpecialite()" required value="<?php if (isset($_GET['idDoctor'])){echo $row['specialite'];}?>">
                <datalist id="specs">
                    <option value="L’allergologie">
                    <option value="L’anesthésiologie">
                    <option value="La cardiologie">
                    <option value="La chirurgie">
                    <option value="La neurochirurgie">
                    <option value="La radiothérapie">
                    <option value="La gériatrie">
                    <option value="La gynécologie">
                    <option value="La néphrologie">
                </datalist><br>
                
                <input type="submit" class="Loginbtn" value="Edit" name="registerbtn" onclick="valid()">
              </form>
            </div>
         </div>
       </div>
     </div>

</div>


</body>
<script langage="javascript" src="JSMEDECINFiles/interaction1.js"></script>
</html>