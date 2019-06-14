<?php
/* Smarty version 3.1.33, created on 2019-06-14 23:20:53
  from 'C:\Programs\XAMPP\htdocs\themes\cadouri\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0401a5d51bd7_75767707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1fba339ceab5735b52c452d75ae93bc7b71bcbf' => 
    array (
      0 => 'C:\\Programs\\XAMPP\\htdocs\\themes\\cadouri\\templates\\index.tpl',
      1 => 1560443401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0401a5d51bd7_75767707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16806364195d0401a5d4f9f2_42274462', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2249197805d0401a5d4ff55_20784983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4031216715d0401a5d50ad9_06261960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19821146595d0401a5d50696_32618206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4031216715d0401a5d50ad9_06261960', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16806364195d0401a5d4f9f2_42274462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16806364195d0401a5d4f9f2_42274462',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2249197805d0401a5d4ff55_20784983',
  ),
  'page_content' => 
  array (
    0 => 'Block_19821146595d0401a5d50696_32618206',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4031216715d0401a5d50ad9_06261960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2249197805d0401a5d4ff55_20784983', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19821146595d0401a5d50696_32618206', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
