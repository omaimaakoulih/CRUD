<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listeelements.css">
    <title>Liste</title>
</head>
<body>
    <div class="container">
        <div class="elements">
            <h1>La liste des élements</h1>
            <table>
                <tr>
                    <th>Le Nom</th>
                    <th>L'identifiant</th>
                    <th>Le prix</th>
                    <th class="MS">Modifier/supprimer</th>
                </tr>
                <?php 
               session_start();
               include("dbconnect.php");  

               $sql="select * from commerce.elements";
               $result=$conn->query($sql);

               $num=mysqli_num_rows($result);
               while($num>=1){
                $row=$result->fetch_assoc();

                 echo "<tr>";
                 echo "<td>".$row['nom']."</td>";
                 echo "<td>".$row['identifiant']."</td>";
                 echo "<td>".$row['prix']."</td>";
                 $_SESSION['id']=$row['Id'];
                 $ID=$row['Id'];
                 $name=$row['nom'];
                 $prix=$row['prix'];
                 $identifiant=$row['identifiant'];
                 echo '<td>
                    <div class="buttonMS">
                    <form action="modify.php?id='.$ID.'&name='.$name.'&identifiant='.$identifiant.'&prix='.$prix.'" enctype="multipart/form-data"  method="post">
                        <input type="submit" name="submit" id="modifier" value="Modifier">
                    </form>
                    <form action="supprimer.php?id='.$row['Id'].'" enctype="multipart/form-data" method="post">   
                        <input type="submit" name="submit" id="supprimer" value="Supprimer">
                    </form>    
                    </div>
                 </td>
                 ';
                 echo "</tr>";
                 /*
                    $_SESSION['name']=$row['nom'];
                    $_SESSION['identifiant']=$row['identifiant'];
                    $_SESSION['prix']=$row['prix'];
                    $_SESSION['id']=$row['Id'];
                    if(isset($_POST['submit'])){
                        break;
                    }
                    */
                    
                 $num=$num-1;
               }
               mysqli_close($conn);
               ?>
            </table>
        </div>    
    </div>

    
    
</body>
</html>