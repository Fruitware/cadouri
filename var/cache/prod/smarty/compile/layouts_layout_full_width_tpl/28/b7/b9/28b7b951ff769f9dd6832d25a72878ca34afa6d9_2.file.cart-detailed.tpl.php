<?php
/* Smarty version 3.1.33, created on 2019-06-14 22:58:14
  from 'C:\Programs\XAMPP\htdocs\themes\cadouri\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d03fc56a9ed24_96748269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28b7b951ff769f9dd6832d25a72878ca34afa6d9' => 
    array (
      0 => 'C:\\Programs\\XAMPP\\htdocs\\themes\\cadouri\\templates\\checkout\\_partials\\cart-detailed.tpl',
      1 => 1560443402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_5d03fc56a9ed24_96748269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16846265835d03fc56a99ac7_10216251', 'cart_detailed_product');
?>

<?php }
/* {block 'cart_detailed_product_line'} */
class Block_2015276745d03fc56a9bdc0_69583222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
          <?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'cart_detailed_product'} */
class Block_16846265835d03fc56a99ac7_10216251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product' => 
  array (
    0 => 'Block_16846265835d03fc56a99ac7_10216251',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_2015276745d03fc56a9bdc0_69583222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
    <ul class="cart-items">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <li class="cart-item">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015276745d03fc56a9bdc0_69583222', 'cart_detailed_product_line', $this->tplIndex);
?>

        </li>
        <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?><hr><?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php } else { ?>
      <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_product'} */
}
