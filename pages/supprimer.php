<?php 
session_start();
include("dbconnect.php");

$id=$_GET['id'];
$sql="DELETE FROM commerce.elements WHERE Id='$id';";
mysqli_query($conn,$sql);
mysqli_close($conn);

header('Location: listeelements.php');
?>