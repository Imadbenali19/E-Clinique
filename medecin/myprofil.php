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
    <title>medecin | Mon Profil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <a class="nav-link" href="mycalendar.php" id="prdv">Mon calendrier</a>
            </li>
 
            <li class="nav-item">
                <a class="nav-link active" href="myprofil.php" id="mp">Mon profil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Rapports.php" id="rp">Mes Rapports</a>
            </li>
            
        </ul>
        </div>
    </div>
    
    <table class="table" style="margin-top: 15px;">
    <thead class="table-light">
				<th>ID Medecin</th>
				<th>Nom</th>
				<th>Prenom</th>
                <th>N° Tel</th>
				<th>Email</th>
				<th>Password</th>
				<th>Adresse</th>
				<th>Frais RDV</th>
				<th>Spécialité</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
                    $myId=$_SESSION['idMedecin'];
                    $query=mysqli_query($conn,"select * from medecin where idM='$myId'");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['idM']; ?></td>
                            <td><?php echo $row['nom']; ?></td>
							<td><?php echo $row['prenom']; ?></td>
							<td><?php echo $row['tel']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['adresse']; ?></td>
							<td><?php echo $row['fee']; ?></td>
							<td><?php echo $row['specialite']; ?></td>
                            <td>
                                <a href="editMyProfil.php?idMedecin=<?php echo $row['idM']; ?>">Modifier</a> |
								<a href="deleteMe.php?idMedecin=<?php echo $row['idM']; ?>&nomMedecin=<?php echo $row['nom']; ?>&prenomMedecin=<?php echo $row['prenom']; ?>">Demande de suppression</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>



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
            z.setAttribute("class","nav-link");
            
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
        
        y.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
        }

        
        x.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
        }

        z.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
        }



</script>


</html>