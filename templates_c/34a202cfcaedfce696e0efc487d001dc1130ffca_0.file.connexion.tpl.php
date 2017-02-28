<?php
/* Smarty version 3.1.30, created on 2017-02-28 16:17:29
  from "/var/www/html/PHP_Avance/micro_blog_2/templates/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b59489046a35_69183067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a202cfcaedfce696e0efc487d001dc1130ffca' => 
    array (
      0 => '/var/www/html/PHP_Avance/micro_blog_2/templates/connexion.tpl',
      1 => 1488285963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58b59489046a35_69183067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div id="notif" class="hidden"></div><!-- div créée pour le script en jQuery -->
    <form id="form" method="post" action="connexion.php">
      <div class="row">
        <div class="form-group col-sm-2">
          <label for="pseudo">Pseudo</label>
          <input type="pseudo" name="pseudo" class="form-control" id="pseudo" placeholder="Pseudo">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-2">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <!--
    Par le biais de jQuery, on préviens l'utilisateur si des champs ne sont pas renseignés pour qu'il puisse se connecter
    On commence par récupérer la valeur des deux champs
	    Si elle est vide :
		    On supprime la class hidden de la div, et on lui attribut les class alert et alert-danger
		    Ensuite, on afffiche un message d'erreur qui viendra se glisser en dessous des champs grâce à slideDown
	    Sinon, l'utilisateur peut accéder au contenu de la page
    -->

    <!--<?php echo '<script'; ?>
>
	  $(document).ready(function()
    {
      $('#form').submit(function()
      {
        var pseudo = $('#pseudo').val();
        var mdp = $('#password').val();
        if(pseudo == "" && mdp == "")
        {
          $(#notif).removeClass();
          $(#notif).addClass(alert alert-danger);
          $(#pseudo).html("Erreur, veuillez remplir le champs");
          $(#password).html('Erreur, veuillez remplir le champs');
          $(#notif).slideDown();
          //alert('Veuillez remplir les champs');
          return false;
        }
        else
        {
          return true;
        }
      });
    });
  <?php echo '</script'; ?>
>-->
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
