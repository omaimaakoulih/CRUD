<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouter.css">
    <title>Aajouter un element</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Le nom de produit</label><br>
                <input type="text" id="name" name="name" placeholder="Le nom">
            </div>
            <div>
                <label for="id">L'identifiant</label><br>
                <input type="text" id="id" name="id" placeholder="L'identifiant">
            </div>
            <div>
                <label for="prix">Le prix</label><br>
                <input type="text" id="prix" name="prix" placeholder="Le prix">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php 
    include("dbconnect.php");

    $name=$_POST['name'];
    $id=$_POST['id'];
    $prix=$_POST['prix'];


    if(empty($name)){
        echo "error=Le nom est vide ";
        exit();
    }
    else if(empty($id)){
        echo "error=L'indentifiant est vide ";
        exit();
    }
    else if(empty($prix)){
        echo "error=Le prix est vide ";
        exit();
    }
    else{
        $sql="INSERT INTO commerce.elements (nom,identifiant,prix) values ('$name','$id','$prix');";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('Location: home.html');
    }
    ?>
    
</body>
</html>