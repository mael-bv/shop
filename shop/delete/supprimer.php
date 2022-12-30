<?php
    require("../acces/commande.php");
    $produits = afficher();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" title="style" href="supprimer.css"/>
    <title>Document</title>
</head>
<body>
<div class="container">
        <form method="post" class="form">
            <div class="title">Bonjour</div>
                <div class="subtitle">Supprimer un produit</div>
                <div class="input-container ic2">
                    <input id="email" class="input" type="number" placeholder=" " name="number" />
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Numéro produit</>
                </div>
            <button type="text" name="submit" class="submit">Supprimer</button>
        </form>
    </div>
    <div class="vue">
        <?php foreach ($produits as $produit): ?>
        <div class="photo">
            <div class="pics">
                <img src="<?= $produit->image?>" alt="">
            </div>
            <div class="num">
                <?= $produit->id?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    if(isset($_POST['number'])){
        if(!empty($_POST['number']) AND is_numeric($_POST['number'])){
            $id = htmlspecialchars($_POST['number']);
            try{
                supprimer($id);
                header('Location: supprimer.php');
            }catch(Execption $e){
                $e->getMessage();
            }
        }
    }
}

?>