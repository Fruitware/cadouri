<?php
/* Smarty version 3.1.33, created on 2019-06-14 18:39:39
  from 'C:\Programs\XAMPP\htdocs\themes\cadouri\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d03bfbb31b245_43216048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c87ea8e1ff494d40f912aa086b8c36f4406fe4' => 
    array (
      0 => 'C:\\Programs\\XAMPP\\htdocs\\themes\\cadouri\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1560443401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d03bfbb31b245_43216048 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
