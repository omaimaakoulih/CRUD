<?php

$severname="localhost";
$usename="root";
$password="Omaima";
$dataname="commerce";

// crete a connection : 

$conn=new mysqli($severname,$usename,$password,$dataname);
// check conncetion : 
if($conn->connect_error){
    die("Connection failed : ".$connect_error);
}
?>