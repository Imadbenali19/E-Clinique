<?php


if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=localhost;dbname=eclinique', 'root', '');
 $query = "
 delete from calendrier WHERE idCal=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>