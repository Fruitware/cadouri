<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:04:44
  from 'C:\Programs\XAMPP\htdocs\admin038sx7bbg\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039b6c3d82c8_87662378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46ce0fdb99c65e2cd2497fdc48f47c45400aea3a' => 
    array (
      0 => 'C:\\Programs\\XAMPP\\htdocs\\admin038sx7bbg\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1560443338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d039b6c3d82c8_87662378 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
