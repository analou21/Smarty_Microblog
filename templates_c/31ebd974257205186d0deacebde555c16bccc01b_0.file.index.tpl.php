<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:59:05
  from "/var/www/html/PHP_Avance/micro_blog_2/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe7d94f9a71_89285864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ebd974257205186d0deacebde555c16bccc01b' => 
    array (
      0 => '/var/www/html/PHP_Avance/micro_blog_2/templates/index.tpl',
      1 => 1490806741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58dbe7d94f9a71_89285864 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/PHP_Avance/micro_blog_2/tpl/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['connexion']->value == "co") {?>
  <div class="row">
    <form method="post" action="message.php">
      <div class="col-sm-10">
        <div class="form-group">
          <!-- On affiche le message -->
          <textarea id="message" name="message" class="form-control" placeholder="Message">
          </textarea>
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          <input type="hidden" name="id" value="<?php echo '<?php ';?>echo $id <?php echo '?>';?>"/>
        </div>
      </div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
      </div>
    </form>
  </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value, 'sms');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sms']->value) {
?>
  <blockquote>
    <li>
      <?php echo $_smarty_tpl->tpl_vars['sms']->value['contenu'];?>

      <br>
        Ecrit par : <?php echo $_smarty_tpl->tpl_vars['sms']->value['pseudo'];?>

      <br>
        Date d'ajout :  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sms']->value['date'],"%D à %H h %M m %S s");?>

      <br>
      <?php if ($_smarty_tpl->tpl_vars['connexion']->value == "co") {?>
        <div class="col-sm-2">
          <a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['sms']->value['message_id'];?>
"><button type='button' class='btn btn-warning'>Modifier</button></a>
        </div>
        <div class="col-sm-2">
          <a href="suppression.php?id=<?php echo $_smarty_tpl->tpl_vars['sms']->value['message_id'];?>
"><button type='button' class='btn btn-danger'>Supprimer</button></a>
        </div>
        <div class="col-sm-12">
        </div>
      <?php }?>
    </li>
  </blockquote>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<ul class="pagination">
  <!-- on affiche les flèches vers la gauche !-->
  <?php if ($_smarty_tpl->tpl_vars['nbmess']->value > 0) {?>
    <li>
      <a class="page-link" href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" aria-label="Previous"><<</a>
    </li>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
      <li>
        <a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
      </li>
    <?php }
}
?>

    <!-- on affiche les flèches vers la droite !-->
    <li>
      <a class="page-link" href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" aria-label="Next">>></a>
    </li>
  <?php }?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
