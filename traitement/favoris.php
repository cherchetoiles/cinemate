<?php
session_start();
require ('./bdd.php');
$id_film = $_GET['id_film'];
$id_user=$_SESSION['id_user'];
$req = 'INSERT INTO preferer (id_film,id_user) VALUES (?,?)';
$req = $db->prepare($req);
$req->execute([$id_film,$id_user]);

header ('Location: ../film.php?id_film='.$id_film);
?>