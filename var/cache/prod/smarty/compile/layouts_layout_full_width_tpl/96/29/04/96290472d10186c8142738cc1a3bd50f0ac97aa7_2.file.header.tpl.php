<?php
/* Smarty version 3.1.33, created on 2019-06-14 19:24:42
  from 'C:\Programs\XAMPP\htdocs\themes\cadouri\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d03ca4aeb6ea6_58764155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96290472d10186c8142738cc1a3bd50f0ac97aa7' => 
    array (
      0 => 'C:\\Programs\\XAMPP\\htdocs\\themes\\cadouri\\templates\\_partials\\header.tpl',
      1 => 1560443402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d03ca4aeb6ea6_58764155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2910855755d03ca4aeb23e8_82498496', 'header_banner');
?>


<div class="cadouri_header container">
    <div class="cadouri_header_left_container" id="_desktop_logo">
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <h1>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
            </h1>
        <?php } else { ?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
        <?php }?>
    </div>
    <div class="cadouri_header_middle_container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10120430685d03ca4aeb50d1_83912527', 'header_nav');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17088155405d03ca4aeb5ae8_18865666', 'header_top');
?>

    </div>
    <div class="cadouri_header_right_container">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

    </div>
</div>
</div>
<?php }
/* {block 'header_banner'} */
class Block_2910855755d03ca4aeb23e8_82498496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_2910855755d03ca4aeb23e8_82498496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_10120430685d03ca4aeb50d1_83912527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_10120430685d03ca4aeb50d1_83912527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <nav class="header-nav">
                <div class="container">
                    <div class="row">
                        <div class="hidden-sm-down cadouri_flex_row c-fl-full cadouri_header_middle_container_block border-bottom">
                            <div class="cadouri_flex_row"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
                            <div class="social-block-inline">
                                <a href="https://www.facebook.com/CadouriMdDelivery" target="_blank"><i class="icon-facebook"></i>&nbsp;</a>
                                <a href="https://plus.google.com/b/114994901007250595971" target="_blank"><i class="icon-gplus"></i>&nbsp;</a>
                                <a href="https://www.instagram.com/cadouri_md/" target="_blank"><i class="icon-instagram"></i>&nbsp;</a>
                                <a href="#" target="_blank"><i class="icon-telegram"></i>&nbsp;</a>
                                <a href="viber://chat?number=+37379646609" target="_blank"><i class="icon-viber"></i>&nbsp;</a>
                            </div>
                            <div class="contact-phone-block float-xs-right"><i class="icon-phone"></i> +373 79 64 66 09</div>
                        </div>
                        <div class="hidden-md-up text-sm-center mobile">
                            <div class="float-xs-left" id="menu-icon">
                                <i class="material-icons d-inline">&#xE5D2;</i>
                            </div>
                            <div class="float-xs-right" id="_mobile_cart"></div>
                            <div class="float-xs-right" id="_mobile_user_info"></div>
                            <div class="top-logo" id="_mobile_logo"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </nav>
        <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_17088155405d03ca4aeb5ae8_18865666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_17088155405d03ca4aeb5ae8_18865666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 position-static">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display: none">
                        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                        <div class="js-top-menu-bottom">
                            <div id="_mobile_currency_selector"></div>
                            <div id="_mobile_language_selector"></div>
                            <div id="_mobile_contact_link"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'header_top'} */
}
