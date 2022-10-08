<?php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=eclinique', 'root', '');
setlocale(LC_ALL, 'fr_FR');
if(isset($_POST["title"])){
  
    if(isset($_SESSION['idPCAL'])){
      $data = [
        'statut' => 'actif',
        'daterd' => $_POST['start'],
        'id' => $_SESSION['idrdvCAL'],
    ];
      $query = "update rendezvous set statut=:statut, dateRdv=:daterd where idRdv=:id";
      $statement = $connect->prepare($query);
      $statement->execute($data);
      $quer = "insert into notification (Nom,Description,DateNoti,statut,ForWho,motif,WhoDid,idrendez) 
      values(:nom,:desc,:date,:stat,:fh,:mo,:wd,:idre)";
      $statem = $connect->prepare($quer);
      $dateNotification=date('Y-m-d H:i:s');
      $statem->execute(
      array(
          ':nom'  => 'patient',
        ':desc'  => 'Rendez vous fixé verifiez vos appointements!',
        ':date' => '$dateNotification',
        ':stat' => 'unread',
        ':fh' => $_SESSION['idPCAL'],
        ':mo' => 'Information',
        ':wd' => $_SESSION['idMedecin'],
        ':idre' => $_SESSION['idrdvCAL'],
        )
      );
      unset($_SESSION['idPCAL']);
      unset($_SESSION['idrdvCAL']);
  }

 $query1 = "
 insert into calendrier 
 (idM,description, datecal, datecalFin) 
 values (:idM,:description, :datecal, :datecalFin)
 ";
 $statement1 = $connect->prepare($query1);
 $statement1->execute(
  array(
    ':idM'  => $_SESSION['idMedecin'],
   ':description'  => $_POST['title'],
   ':datecal' => $_POST['start'],
   ':datecalFin' => $_POST['end']
  )
 );
 
}


?>
