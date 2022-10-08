<?php
session_start();
$_SESSION['username']=$_SESSION['nomM'];
    include ("../connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medecin | Rapports</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSSFiles/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .nav {
        width: max-content;
    }
</style>


<body>
    <div class="container" >
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="../home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="../Images/Logo Site.PNG" alt="Logo" title="Logo" height="120px" width="160px">
            </a>

            <!-- ------------------------------------------ -->
            <?php include("notificationIndex.php"); ?>
            <!-- ------------------------------------------------- -->

            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
                Medecin : <?php echo $_SESSION['username'] ?>
                </li>
            </ul>
            
        </header>
        <div class="divNav">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="medecin_index.php" id="mrdv" >Mes rendez-vous</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="mycalendar.php" id="prdv">Mon calendrier</a>
            </li>
 
            <li class="nav-item">
                <a class="nav-link" href="myprofil.php" id="mp">Mon profil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="Rapports.php" id="rp">Mes Rapports</a>
            </li>
            
        </ul>
        </div>
    </div>
	</div>

<div class="card">
<div class="card-block">
<form id="main" method="post" action="Writerapport.php" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">L'Id du rendez-vous : </label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="idrdv" id="idrdv"  required>
        </div><br><br>

        <label class="col-sm-2 col-form-label">Température : </label>
        <div class="col-sm-4">
            <input class="form-control" type="number" id="temp" name="temp" value="<?php if(isset($_GET['temp'])) echo $_GET['temp']; ?>" required>
        </div><br><br>

        <label class="col-sm-2 col-form-label">Poids : </label>
        <div class="col-sm-4">
            <input class="form-control" type="number" id="poids" name="poids" value="<?php if(isset($_GET['poids'])) echo $_GET['poids']; ?>" required >
        </div><br><br>

        <label class="col-sm-2 col-form-label">Médicaments(Séparées par ;) : </label>
        <div class="col-sm-4">
            <input class="form-control" type="text" id="med" name="med" value="<?php if(isset($_GET['med'])) echo $_GET['med']; ?>" required >
        </div><br><br>
    </div>

    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
            <button type="submit" name="btn_submit" class="btn btn-primary m-b-0" id="submit1">Submit</button>
        </div>
    </div>

</form>
</div>
</div>

</body>
<script>
    var x=document.getElementById("mrdv");
        var y=document.getElementById("prdv");
        var w=document.getElementById("mp");
        var z=document.getElementById("rp");
        x.onmouseover=function(){
            x.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            
        }

        y.onmouseover=function(){
            y.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link");
            w.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link ");
            
        }


        w.onmouseover=function(){
            w.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
        }

        z.onmouseover=function(){
            z.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
        }

        w.onmouseout=function(){
            z.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link");
            x.setAttribute("class","nav-link");
            w.setAttribute("class","nav-link");
        }

        
        y.onmouseout=function(){
            z.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
        }

        x.onmouseout=function(){
            z.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
        }

</script>

</html>