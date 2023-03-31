<?php
session_start();
require ('./bdd.php');
$id_film = $_GET['id_film'];
$id_user=$_SESSION['id_user'];
$req = 'DELETE FROM preferer WHERE id_user=? AND id_film=?';
$req = $db->prepare($req);
$req -> bindParam(1,$id_user);
$req -> bindParam(2,$id_film);
$req->execute();

header ('Location: ../film.php?id_film='.$id_film);
?>