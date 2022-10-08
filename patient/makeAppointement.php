<?php
session_start();
    include ("../connection.php");
    setlocale(LC_ALL, 'fr_FR');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient | Rendez-Vous</title>

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
    
.row {
	padding: 20px 0;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center
}


.form-control {
	font-size: 14px;
	border-radius: 2px;
	border: 1px solid #ccc
}

.form-control:focus {
	border: 1px solid #6c56f5
}

.btn-primary{
	background-color:#0d6efd;
	border-color: #0d6efd;
	color: #fff;
	cursor: pointer;
	-webkit-transition: all ease-in .3s;
	transition: all ease-in .3s
}

.btn-primary:hover {
	background-color: #01dbdf;
	border-color: #01dbdf
}

.btn-primary:active {
	background-color: #016d6f!important;
	border-color: #016d6f;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff
}

.btn-primary:focus{
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff;
	background-color: #01dbdf
}

.btn-primary.disabled {
	background-color: rgba(1, 169, 172, .5);
	border-color: rgba(1, 169, 172, .5)
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
                Patient : <?php echo $_SESSION['username'] ?>
                </li>
            </ul>
            
        </header>
        <div class="divNav">
        <ul class="nav nav-pills">
        <li class="nav-item">
                <a class="nav-link" aria-current="page" href="patient_index.php" id="mrdv" >Mes rendez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active" href="makeAppointement.php" id="prdv">Planifier un Rendez-vous</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="searchDoctors.php" id="cm">Chercher un medecin</a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="myprofil.php" id="mp">Mon profil</a>
            </li>
            
        </ul>
        </div>
    </div>
    
<div>

<div class="card">
<div class="card-block">
<form id="main" method="post" action="makeAppointement.php" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Spécialité : </label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="spec" id="spec" placeholder="Donnez la spécialité que vous cherchez" >
        </div>

        <label class="col-sm-2 col-form-label">Description : </label>
        <div class="col-sm-4">
            <input class="form-control" type="text" id="description" name="description" placeholder="Description du rendez-vous">
        </div>
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

<?php if(isset($_POST['btn_submit'])){ ?>
    <script>
        document.getElementById("spec").disabled=true;
        document.getElementById("description").disabled=true;
        document.getElementById("submit1").hidden=true;
    </script>
    <div class="col-sm-4">
    <select name="sp" id="sp" class="form-control">
        <?php
            $x=$_POST['spec'];
            $_SESSION['sel']=$_POST['sp'];
            $_SESSION['specialite']=$_POST['spec'];
            $_SESSION['description']=$_POST['description'];

            $req="select idM,nom,prenom,specialite,fee from medecin where specialite='$x'";
            $query=mysqli_query($conn,$req);
            $_SESSION['nbtspec']=mysqli_num_rows($query);
            $req2=mysqli_query($conn,"select count(*) as 'nbTotal' from rendezvous");
            $row2=mysqli_fetch_array($req2);
            $_SESSION['nombre']=$row2['nbTotal'];
            while($row=mysqli_fetch_array($query)){
                $_SESSION['idM']=$row['idM'];
                ?>
                    <option value="<?php echo $row['idM']; ?>"><?php echo $row['nom'].' '.$row['prenom'].' '.$row['fee'].' Dhs'; ?></option>
                
        <?php } ?>

    </select>
    <?php } ?>
    </div>
    <form action="makeAppointement.php" method="post">
        <div class="form-group row">
            <label class="col-sm-2"></label>
            <div class="col-sm-10">
                <input type="submit" name="btn_submit2" id="submit2" class="btn btn-primary m-b-0" value="Valider choix" hidden>
            </div>
        </div>
    </form>

    <script>
        x=document.getElementById("spec");
        if(x.disabled==true && <?php echo $_SESSION['nbtspec']; ?>!=0){
           document.getElementById("submit2").hidden=false; 
        }
        
    </script>
    
    <?php
        if(isset($_POST['btn_submit2'])){
            $idrdv= $_SESSION['nombre']+1;
            $numP=$_SESSION['idPatient'];
            $numM= $_SESSION['idM'];
            $des=$_SESSION['description'];
            echo "<script>alert('fait')</script>";
            $req="insert into rendezvous values('$idrdv','$numP','$numM','$des',null,null)";
            mysqli_query($conn,$req);
            // echo 'Id rendez vous : '.$idrdv; echo '<br>';
            // echo 'Id pateitn : '.$numP; echo '<br>';
            // echo 'Id medecin : '.$numM;echo '<br>';
            // echo 'descriptio : '.$des;echo '<br>';
            
            $name=$_SESSION['username'];
            $description="Le patient $name, a demande la fixation d\'un rendez-vous";
            $dateNo=date('Y-m-d H:i:s');
            mysqli_query($conn,"insert into notification values(null,'medecin','$description','$dateNo','unread','$numM','Fixer RDV','$numP','$idrdv')");
            // echo '<script language="javascript">document.location.replace("makeAppointement.php")</script>';
            }
    ?>
    

</body>

<script>
    var x=document.getElementById("mrdv");
        var y=document.getElementById("prdv");
        var z=document.getElementById("cm");
        var w=document.getElementById("mp");
        
        x.onmouseover=function(){
            x.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            
        }


        
        y.onmouseover=function(){
            y.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link");
            w.setAttribute("class","nav-link");
            
        }

        
        z.onmouseover=function(){
            z.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            
        }

        
        w.onmouseover=function(){
            w.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
        }
        w.onmouseout=function(){
            y.setAttribute("class","nav-link active");
            w.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link");
            x.setAttribute("class","nav-link");
        }

        
        z.onmouseout=function(){
            y.setAttribute("class","nav-link active");
            z.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            
        }

        
        x.onmouseout=function(){
            y.setAttribute("class","nav-link active");
            w.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
        }



</script>


</html>