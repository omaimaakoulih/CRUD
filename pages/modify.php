<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modify.css">
    <title>Modify</title>
</head>

<?php 
/*
session_start();
*/
include("dbconnect.php");
$name=$_GET['name'];
$id=$_GET['identifiant'];
$prix=$_GET['prix'];
$ID=$_GET['id'];
echo
'<body>
    <div class="container">
        <form action="modifierdata.php?&id='.$ID.'"  method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Le nom de produit</label><br>
                <input type="text" id="name" name="name" value="'.$name.'">
            </div>
            <div>
                <label for="ident">identifiant</label><br>
                <input type="text" id="ident" name="ident" value="'.$id.'">
            </div>
            <div>
                <label for="prix">Le prix</label><br>
                <input type="text" id="prix" name="prix" value="'.$prix.'">
            </div>
            <div>
                <input type="submit" id="submit" name="submit" value="Modifier">
            </div>
        </form>
    </div>';
    mysqli_close($conn);
    ?>

    
</body>
</html>