<?php

header('Content-Type: application/json');

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=moduloheart;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$query = sprintf('SELECT date_and_time, measure_value FROM measure');


$result=$bdd->query($query);

$data=array();
foreach($result as $row){
	$data[]=$row;
}


print json_encode($data);
?>
