<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>prova</title>
  </head>
  <body>
    <?php
    init ('display_error'.1);
    $hostname='hostlocal';
    $dbname="notespese";
    $user="alternanza";
    $password="alternanza";

    $db=new PDO ("msql:host=$hostname;dbname=$dbname;user=$user;password=$password")

$query="select * from spese;";
$result=$db->query($query);

$dati=$result->fetchall(PDO::FETCH_ALL);

echo '<pre>';
     var_dump($dati);
echo '</pre>';
    ?>

<table>
  <thead>
    <th>id</th>
    <th>descrizione</th>
    <th>importo</th>
    <th>data</th>
    <th>tipologia</th>
</thead>

<tbody>


<?php
foreach ($dati as $indice => $riga) {
  echo '<tr>';

  echo '<td>'.$riga['id'].'</td>';
  echo '<td>'.$riga['descrizione'].'</td>';
  echo '<td>' .$riga['importo'].'</td>';
  echo '<td>' .$riga['data'].'</td>';
  echo '<td>' .$riga['tipologia'].'</td>';
  echo '</tr>';


  // code...
}

 ?>
</tbody>
</table>


  </body>
</html>
