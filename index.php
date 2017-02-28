<?php
  include_once('includes/connexion.inc.php');

  /* On inclut la classe Smarty */
  require_once("tpl/Smarty.class.php");
  /*require_once("tpl/SmartyBC.class.php");*/

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

  /*Code consacré à la pagination*/
  $index = 0;
  $mpp = 3;

  if(isset($_GET['p']) && !empty($_GET['p']))
  {
    $page = $_GET['p'];
    $index = ($page - 1)* $mpp;
  }
  $query = 'SELECT * , messages.id as message_id FROM messages INNER JOIN utilisateur ON messages.utilisateur_id = utilisateur.id LIMIT '.$index.','.$mpp.'';
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  /*
  On récupère les messages dans la BDD
  Si l'utilisateur clique sur modifier, on affiche le nouveau message
  Si l'utilisateur clique sur supprimer, on supprime le message sélectionné
  */
  $query = 'SELECT * FROM messages';
  $stmt = $pdo->query($query);
  while ($data = $stmt->fetch())
  {
    /*On affiche les boutons de création, modification et suppression seulement si l'utilisateur est connecté*/
    if($connecte == true)
    {
    }else
    {
    }
  }
  $requete = 'SELECT COUNT(*) as total_messages FROM messages';
  $prep = $pdo->query($requete);
  $data = $prep->fetch();
  $nombre_message = $data['total_messages'];

  $nb_pages = ($nombre_message) ? ceil($nombre_message/$mpp) : 1;
  $page = 0;
  if ($page > 1)
  {
    $previous = $page - 1;
  }else
  {
    $previous = 1;
  }
  if($page < $nb_pages)
  {
    $next = $page + 1;
  }else
  {
    $next = $page;
  }
  $smarty = new Smarty();
  $smarty->display("index.tpl");
?>
