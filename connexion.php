<?php
	include ('includes/connexion.inc.php');
	require_once("tpl/Smarty.class.php");

	/*
	De part ce code php, on vérifie si les variables pseudo et password existent
		Si elles le sont, nous allons chercher dnas la base de données le mot de passe et le pseudo contenu
			Grâce à une requête préparée, on compare les pseudos et les mots de passe cryptés.
			Si ils correspondent, l'utilisateur est redirigé vers la page d'accueil et peut modifier/créer/supprimer un article
	*/

	if(isset($_POST['pseudo']) && isset($_POST['password']))
	{
  	$pwd=$_POST['password'];
  	$pseudo=$_POST['pseudo'];

  	$query="SELECT * FROM utilisateur WHERE pseudo=? and mdp=?";
  	$prep = $pdo->prepare($query);
  	$prep->bindValue(1,$pseudo);
  	$prep->bindValue(2,$pwd);
  	$prep->execute();

  	if($prep->fetch())
		{
    	$sid=$pseudo.time();
    	$sid=md5($sid);
    	setcookie("sid",$sid,time()+300,null,null,false,true);
    	$query="UPDATE utilisateur SET sid=? where pseudo=?";
    	$prep = $pdo->prepare($query);
    	$prep->bindValue(1,$sid);
    	$prep->bindValue(2,$pseudo);
    	$prep->execute();
    	header("Location:index.php");
  	}
	}
	$smarty = new Smarty();
	if($connecte == true)
  {
    $connecte = "co";
  }else
  {
    $connecte = "deco";
  }
  $smarty->assign('connex', $connecte);
	$smarty->display("connexion.tpl");
?>
