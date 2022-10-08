<?php
session_start();
    include ("../connection.php")

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSSFiles/style1.css">
    
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
                <a class="nav-link" href="makeAppointement.php" id="prdv">Planifier un Rendez-vous</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="searchDoctors.php" id="cm">Chercher un medecin</a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="myprofil.php" id="mp">Mon profil</a>
            </li>
            
        </ul>
        </div>
    </div>
    
<div>
<center>
<form action="" style="margin: 10px;">
    <input type="radio" value="1" name="Chercher" id="ch1" onclick="Ischecked1()">Chercher par nom
    <input type="radio" value="2" name="Chercher" id="ch2" onclick="Ischecked2()" style="margin-left: 30px;">Chercher par spécialité
</form>
</center>
<div id="h"></div>
<div id="h2"></div>
<script>
    function Ischecked1(){
       if(document.getElementById("ch1").checked){
        document.getElementById('h2').innerHTML=`<center><form action="searchDoctors.php" method="post">
            <input type="text" value="" name="NomMedecin" id="NomMedecin" placeholder="Donnez le nom à chercher" required style="width: 210px;">
            <input type="submit" value="Chercher" name="chercherbtn1">
        </form></center>`;
        } 
    }
    function Ischecked2(){
       if(document.getElementById("ch2").checked){
        document.getElementById('h2').innerHTML=`<center><form action="searchDoctors.php" method="post">
            <input list="spec" id="sp" placeholder="Entrer votre spécialité" name="sp" onchange="validSpecialite()" required >
            <datalist id="spec">
                <option value="La neurochirurgie">
                <option value="La radiothérapie">
                <option value="La gériatrie">
                <option value="La gynécologie">
                <option value="La néphrologie">
            </datalist>
            <input type="submit" value="Chercher" name="chercherbtn2">
            </form></center>`;
                
        } 
    }

</script>
    
<table class="table" style="margin-top: 15px;">
			<thead class="table-light">
				<th>Nom</th>
				<th>Prenom</th>
                <th>N° Tel</th>
				<th>Email</th>
				<th>Adresse</th>
				<th>Specialite</th>
				<th>Cout du rendez-vous</th>
				<th colspan="2">Action</th>
			</thead>
			<tbody>
				<?php
                    global $nbrresult;
                    $nbrresult=0;
                    global $query;
                    $query=mysqli_query($conn,"select * from medecin where nom='0'");
                    if(isset($_POST['chercherbtn1'])){
                        $nom=$_POST['NomMedecin']; 
                        $nom='%'.$nom.'%';
                        $query=mysqli_query($conn,"select * from medecin where CONCAT(nom, ' ', prenom) like '$nom' or CONCAT(prenom, ' ', nom) like '$nom' ");
                        $nbrresult=mysqli_num_rows($query);
                    }else if(isset($_POST['chercherbtn2'])){
                        $spec=$_POST['sp'];
                        $query=mysqli_query($conn,"select * from medecin where specialite like '$spec'");
                        $nbrresult=mysqli_num_rows($query);
                    }
					
					while($row=mysqli_fetch_array($query)){
                        
						?>
						<tr>
                            <td><?php echo $row['nom']; ?></td>
							<td><?php echo $row['prenom']; ?></td>
							<td><?php echo $row['tel']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['adresse']; ?></td>
							<td><?php echo $row['specialite']; ?></td>
							<td><?php echo $row['fee']; ?></td>
                            <td>
								<a href="#" onclick="fixerRDV(<?php echo $row['idM']; ?>)">Fixer Rendez-vous</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
            <script>
                document.getElementById('h').innerHTML+=<?php echo " {$nbrresult}+' resultat(s)'"; ?>;
            </script>
    <script>
        function fixerRDV(y){
            var x=prompt("Donnez la description du rendez-vous : ");
            window.location.href="makeAppointementsVersion2.php?valeur="+x+"&idDoctor="+y;
        }
    </script>
       

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
            z.setAttribute("class","nav-link active");
            w.setAttribute("class","nav-link");
            y.setAttribute("class","nav-link");
            x.setAttribute("class","nav-link");
        }

        
        y.onmouseout=function(){
            z.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            
        }

        
        x.onmouseout=function(){
            z.setAttribute("class","nav-link active");
            w.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
        }



</script>


</html>