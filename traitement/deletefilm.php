<?php
session_start();
require ('./bdd.php');
$id_film = $_GET['id_film'];


$sql = "DELETE FROM jouer WHERE id_film =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_film);
$req->execute();

$sql = "DELETE FROM classifier WHERE id_film =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_film);
$req->execute();

$sql = "DELETE FROM film WHERE id_film =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_film);
$req->execute();



header('Location:/cinemate/crudfilm.php');
 ?>
