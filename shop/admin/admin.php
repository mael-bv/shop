<?php
session_start();

include "../acces/commande.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" title="style" href="admin.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" class="form">
            <div class="title">Bonjour</div>
                <div class="subtitle">Identifier vous</div>
                <div class="input-container ic1">
                    <input id="firstname" class="input" type="text" placeholder=" " name="mail" />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">mail</label>
                </div>
                <div class="input-container ic2">
                    <input id="lastname" class="input" type="text" placeholder=" " name ="mdp"/>
                    <div class="cut"></div>
                    <label for="lastname" class="placeholder">mot de passe</label>
                </div>
            <button type="text" name="submit" class="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(isset($_POST['mail']) AND isset($_POST['mdp'])){
        if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = htmlspecialchars($_POST['mdp']);

            try {
                $admin = getAdmin($mail,$mdp);
                if($admin){
                    $_SESSION['azertyuiop']= $admin;
                    header("Location: ../add/ajout.php");
                }else{
                    echo "NO succes";
                }
            }catch(Exeception $e){
                $e->getMessage();
            }
            
        }
    }
}

?>