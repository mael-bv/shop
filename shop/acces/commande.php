<?php
function ajouter($titre,$image,$prix)
{
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO shop (titre,image,prix) VALUES ('$titre','$image','$prix')") ;
      $req->execute(array($titre,$image,$prix));
      $req->closeCursor();

    }
}

function afficher()
{
    if(require("connexion.php")){
      $req = $access->prepare("SELECT * FROM shop ORDER BY id DESC") ;
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
      $req->closeCursor();
    }
}

function supprimer($id){
    
    if(require("connexion.php")){
    
        $req = $access->prepare("DELETE  FROM shop WHERE id = ?") ;
        $req->execute(array($id));
      }
}

function getAdmin($email,$mdp){
    if(require("connexion.php"))
    {
      $req = $access->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ? ") ;
      $req->execute(array($email,$mdp));
      if($req->rowCount()==1){
        $data = $req->fetch();
        return $data;
      }else {
        return false;
      }
      $req->closeCursor();

    }
}


?>