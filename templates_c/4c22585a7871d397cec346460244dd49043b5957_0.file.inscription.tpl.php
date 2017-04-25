<?php
/* Smarty version 3.1.30, created on 2017-03-29 14:41:40
  from "/var/www/html/PHP_Avance/micro_blog_2/templates/inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbab84531c69_90739400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c22585a7871d397cec346460244dd49043b5957' => 
    array (
      0 => '/var/www/html/PHP_Avance/micro_blog_2/templates/inscription.tpl',
      1 => 1488285902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58dbab84531c69_90739400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form method="post" action="inscription.php" id="form_inscription">
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPseudo">Pseudo</label>
      <input type="pseudo" name="pseudo" class="form-control" id="InputPseudo" placeholder="Pseudo">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPseudo">Email</label>
      <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
 </form>

<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
