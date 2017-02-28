<?php
/* Smarty version 3.1.30, created on 2017-02-28 16:51:38
  from "/var/www/html/PHP_Avance/micro_blog_2/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b59c8a679475_34677003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ebd974257205186d0deacebde555c16bccc01b' => 
    array (
      0 => '/var/www/html/PHP_Avance/micro_blog_2/templates/index.tpl',
      1 => 1488297032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58b59c8a679475_34677003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div class="row">
    <form method="post" action="message.php">
      <div class="col-sm-10">
        <div class="form-group">
          <!-- On affiche le message -->
          <textarea id="message" name="message" class="form-control" placeholder="Message">
          </textarea>
          <input type="hidden" name="id" value="<?php echo '<?php ';?>echo $id <?php echo '?>';?>"/>
        </div>
      </div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
      </div>
    </form>
  </div>
  <!--<blockquote>

    <div class="col-sm-2">
      <a href='suppression.php?id=" .$data['id']. "'></a>
    </div>
    <div class="col-sm-12">
      <?php echo '<?=';?> "Ajouté le ".$data['date'] <?php echo '?>';?>
    </div>
  </blockquote>-->

  <blockquote>
    <?php if ($_smarty_tpl->tpl_vars['connex']->value == "co") {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'sms');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sms']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['sms']->value['contenu'];?>

        banane<br>
        Ecrit par : <?php echo $_smarty_tpl->tpl_vars['sms']->value['pseudo'];?>

        <br>
        Ajouté le : <?php echo $_smarty_tpl->tpl_vars['sms']->value['date'];?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <div class="col-sm-2">
        <a href='index.php?id=" .$data['id']."&p=".$page."'><button type='button' class='btn btn-warning'>Modifier</button></a>
      </div>
      <div class="col-sm-2">
        <a href='suppression.php?id=" .$data['id']."&p=".$page."'><button type='button' class='btn btn-danger'>Supprimer</button></a>
      </div>
      <div class="col-sm-12">
hello
      </div>

    <?php }?>
  </blockquote>

<!--<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a <?php echo '<?php ';?>echo "href='index.php?p=$previous'" <?php echo '?>';?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li>
      <a <?php echo '<?php ';?>echo "href='index.php?p=$next'" <?php echo '?>';?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>-->

<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
