<?php
  include_once('includes/connexion.inc.php');

  /* On inclut la classe Smarty */
  require_once("tpl/Smarty.class.php");

  $smarty = new Smarty();
  $mpp=5; //message par page souhaité
  $id=0; // message que l'on souhaite modifier, à 0 par défaut
  $rep=""; // message créé ou à modifier

  /*
  On initialise les variables message et id
  Si la variable id existe et qu'elle n'est pas vide
    On récupère la variable id et on va chercher, dans la BDD, tous les messages qui correspondent à cet id
      Si la requête retourne des messages, on les affiche sur la page
      Sinon on redirige vers la page d'accueil sans modification
  */

  $message = '';
  $id = '';
  if(isset($_GET['id']) && !empty($_GET['id']))
  {
    $id = $_GET['id'];
    $sql = 'SELECT * from messages where id='.$id.'';
    $requete = $pdo->query($sql);
    if($data = $requete->fetch())
    {
      $message =  $data['contenu'];
    }else
    {
      header("Location: index.php");
    }
  }

  /* On vérifie si l'utilisateur est connecté */
  if($connecte == true)
  {
    $connecte = "co";
  }else
  {
    $connecte = "deco";
  }

  /*Code consacré à la pagination*/
  $index = 0;

  if(isset($_GET['search']))
  {
    $search = $_GET['search'];
    $recherche = '%'.$search.'%';

    //Calcul du nombre de pages
    //Nombre total de message
    $query = "SELECT count(*) AS total_messages FROM messages AS mess WHERE mess.contenu LIKE ?";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(1,$recherche);
  }else
  {
    $query = 'SELECT count(*) as total_messages FROM messages'; // on recupere le nombre de ligne pour savoir combien il y a de message
    $stmt = $pdo->query($query);
  }

  $stmt->execute();
  $data = $stmt->fetch();
  $nbmess=$data['total_messages']; // on recupère le nombre de message dans la BDD
  $nb_pages=($nbmess) ? ceil($nbmess/$mpp) : 1 ; // on calcul le nombre de page à afficher

  if (isset($_GET['p']) && !empty($_GET['p']))
  {
    if($_GET['p']<1){
      $page=1;
    }else{
      if($_GET['p']>$nb_pages)
      {
        $page=$_GET['p']-1;
      }
      else{
        $page=$_GET['p'];
      }
    }
  }else{
    $page=1;
  }

  /* on redéfinit à partir de quel message on commence à afficher les différents messages */
  $index=($page-1) * $mpp;

  if(isset($_GET['p']) && !empty($_GET['p']))
  {
    $page = $_GET['p'];
    $index = ($page - 1)* $mpp;
  }
  $query = 'SELECT *, messages.id as message_id FROM messages INNER JOIN utilisateur ON messages.utilisateur_id = utilisateur.id';
  print $query;
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $tab=$stmt->fetchAll();

  $i=0;
  /* 
    Assigne les variables php dont nous avons besoin en variables Smarty pour les utilisées dans les .tpl
    Et on les transmets au tpl correspondant
  */
  $smarty->assign("connexion", $connecte);
  $smarty->assign("id", $id);
  $smarty->assign("rep", $rep);
  $smarty->assign("nb_pages", $nb_pages);
  $smarty->assign("page", $page);
  $smarty->assign("message", $message);
  $smarty->assign("tab", $tab);
  $smarty->assign("index", $index);
  $smarty->assign("nbmess", $nbmess);
  $smarty->display("index.tpl");
?>
