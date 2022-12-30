<?php
require("acces/commande.php");
$produits = afficher();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" title="style" href="style.css"/>
    <title>Document</title>
</head>
<body>
<input type="checkbox" id="ham-menu">
<label for="ham-menu">
  <div class="hide-des">
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
  </div>

</label>
<div class="full-page-green"></div>
<div class="ham-menu">
  <ul class="centre-text bold-text">
    <li>Home</li>
    <li><a class ="redirect" href="admin/admin.php">Connexion</a></li>
    <li>Services</li>
    <li>Shop</li>
    <li>Support</li>
    <li>Contact us</li>

  </ul>
</div>

<div class="container">
    <?php foreach ($produits as $produit): ?>
        <div class="card">
            <div class="title">
                <p><?= $produit->titre?></p>
            </div>
            <div class="image">
           <img src="<?= $produit->image?>" alt=""> 
            </div>
            <div class="ensemble">
                <div class="btnAchat">
                    <button>
                        Acheter
                    </button>
                </div>
                <div class="prix">
                    <h2><?= $produit->prix?> Euros</h2>
                </div>
            </div>
            
        </div>
    <?php endforeach; ?>

</div>

<a href="acces/ajout.php">ici</a>
	
</body>
</html>