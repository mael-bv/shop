<?php
session_start();
if(!isset($_SESSION['azertyuiop'])){
    header("Location: ../admin/admin.php");
}
if( empty($_SESSION['azertyuiop'])){
    header("Location: ../admin/admin.php");
}
require("../acces/commande.php");
require("../acces/deconnexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" title="style" href="ajout.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" class="form">
            <div class="title">Bonjour</div>
                <div class="subtitle">Ajouter un produit</div>
                <div class="input-container ic1">
                    <input id="firstname" class="input" type="text" placeholder=" " name="produit" />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">Titre produit</label>
                </div>
                <div class="input-container ic2">
                    <input id="lastname" class="input" type="text" placeholder=" " name ="image"/>
                    <div class="cut"></div>
                    <label for="lastname" class="placeholder">Image</label>
                </div>
                <div class="input-container ic2">
                    <input id="email" class="input" type="number" placeholder=" " name="prix" />
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Prix</>
                </div>
            <button type="text" name="submit" class="submit">Ajouter</button>
        </form>
    </div>

    <form method="post">
        <input type="submit" name="deconnexion" value ="deconnexion">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(isset($_POST['produit']) AND isset($_POST['image']) AND isset($_POST['prix'])){
        if(!empty($_POST['produit']) AND !empty($_POST['image']) AND !empty($_POST['prix'])){
            $titre = htmlspecialchars($_POST['produit']);
            $image =  htmlspecialchars($_POST['image']);
            $prix = htmlspecialchars($_POST['prix']);
            try{
                ajouter( $titre,$image,$prix);
            }catch(Exception $e){
            $e->getMessage();
            
            echo"Tout les champs doivent etre rempli";
            }
            
        }
    }

} 

if(isset($_POST['deconnexion'])){
    if(!empty($_POST['deconnexion'])){
        try{
            deco();
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}

?>