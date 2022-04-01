<?php 
session_start();
include("dbconnect.php");

    $name=$_POST['name'];
    $id=$_GET['id'];
    $prix=$_POST['prix'];
    $ident=$_POST['ident'];
    

    $sql="UPDATE commerce.elements set nom='$name',prix='$prix', identifiant='$ident' where id='$id'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    header('Location: listeelements.php');
?>