<?php
  include('includes/connexion.inc.php');
  require_once("tpl/Smarty.class.php");

  /*Code qui permet à l'utilisateur de s'inscrire sur le blog*/
  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['pseudo']))
  {
    $sid = "";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];

    $query = 'INSERT INTO utilisateur (email,mdp,pseudo) VALUES (:email,:password,:pseudo)';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':email', $email);
    $prep->bindValue(':password', md5($password));
    $prep->bindValue(':pseudo', $pseudo);
    $prep->execute();
    header('Location: index.php');
  }

  /* 
    Assigne la variable php que nous avons besoin en variables Smarty
    Et on la transmets au tpl correspondant
  */
  $smarty = new Smarty();
  $smarty->display("inscription.tpl");
?>
