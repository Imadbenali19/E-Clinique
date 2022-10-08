<?php


$connect = new PDO('mysql:host=localhost;dbname=eclinique', 'root', '');

$data = array();

$query = "select * from calendrier order by idCal";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["idCal"],
  'idM'   => $row["idM"],
  'title'   => $row["description"],
  'start'   => $row["datecal"],
  'end'   => $row["datecalFin"]
 );
}

echo json_encode($data);

?>
