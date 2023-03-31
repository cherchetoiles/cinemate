<?php
session_start();
require ('./bdd.php');
$id_user = $_GET['id_user'];
$sql = "DELETE FROM graduer WHERE id_user =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_user);
$req->execute();

$sql = "DELETE FROM user WHERE id_user =  ?";
$req = $db->prepare($sql);
$req -> bindParam(1,$id_user);
$req->execute();


header('Location:/cinemate/user.php');
 ?>
