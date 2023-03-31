<?php
session_start();
require ('./bdd.php');
$id_artiste = $_GET['id_artiste'];

$sql = "DELETE FROM jouer WHERE id_artiste =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_artiste);
$req->execute();

$sql = "DELETE FROM artiste WHERE id_artiste =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_artiste);
$req->execute();


header('Location:/cinemate/crudartiste.php');
 ?>