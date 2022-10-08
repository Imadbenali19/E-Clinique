<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Clinique</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script langage="javascript" src="JSFiles/interaction1.js"></script>
    <link rel="stylesheet" href="CSSFiles/style1.css">
</head>
<body>
    <div class="container" >
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="Images/Logo Site.PNG" alt="Logo" title="Logo" height="120px" width="160px">
            </a>

            <ul class="nav nav-pills">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
            </ul>
        </header>
    </div>

    <section class="firstSection">
        <img src="Images/MainImage.png" height="100%" width="100%">
        <center>
            <div>
                <a href="admin/admin_login.php"><button type="button" class="btn btn-outline-primary">Admin</button></a>
                <a href="patient/patient_login.php"><button type="button" class="btn btn-outline-secondary">Patient</button></a>
                <a href="medecin/medecin_login.php"><button type="button" class="btn btn-outline-success">Docteur</button></a>
            </div>
            
        </center>
    </section>




    
</body>
</html>