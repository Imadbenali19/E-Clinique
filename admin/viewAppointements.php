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
    <title>admin | Rendez-Vous</title>

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
                </li>
            </ul>
            
        </header>
        <div class="divNav">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="admin_index.php" id="dash" >dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="viewAppointements.php" id="rdv">Rendez-vous</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="viewDoctors.php" id="lm">Lister medecins</a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="viewPatients.php" id="lp">Lister patients</a>
            </li>
            
        </ul>
        </div>
    </div>
    
<div>

		<table class="table">
			<thead class="table-light">
				<th>ID Rendez-vous</th>
				<th>Patient</th>
				<th>Medecin</th>
				<th>Description</th>
				<th>Date du rendez-vous</th>
				<th>Statut du rendez-vous</th>
			</thead>
			<tbody>
				<?php
                    $req="select m.nom Mnom,m.prenom Mpren,p.nom Pnom,p.prenom Ppren,r.* from rendezvous r,medecin m,patient p where r.idP=p.idP and r.idM=m.idM";
					$query=mysqli_query($conn,$req);
					while($row=mysqli_fetch_array($query)){
                        setlocale(LC_ALL, 'fr_FR');
                        $vdate=date('Y-m-d H:i:s');
                        if($vdate>$row['dateRdv'] && $row['dateRdv']!=null){
                            $irdv=$row['idRdv'];
                            mysqli_query($conn,"update rendezvous set statut='inactif' where idRdv='$irdv'");
                        }
						?>
						<tr>
							<td><?php echo $row['idRdv']; ?></td>
							<td><?php echo $row['Mnom'].' '.$row['Mpren']; ?></td>
							<td><?php echo $row['Pnom'].' '.$row['Ppren']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['dateRdv']; ?></td>
							<td><?php echo $row['statut']; ?></td>
						</tr>
						<?php
					}
                    
				?>
			</tbody>
		</table>
	</div>
</body>

<script>
    var x=document.getElementById("dash");
        var y=document.getElementById("lm");
        var z=document.getElementById("lp");
        var w=document.getElementById("rdv");
        
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
        y.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link");
            x.setAttribute("class","nav-link");
            
        }

        
        z.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            z.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
            
        }

        
        x.onmouseout=function(){
            w.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            x.setAttribute("class","nav-link ");
        }



</script>
</html>