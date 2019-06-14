<?php
/* Smarty version 3.1.33, created on 2019-06-14 19:24:28
  from 'C:\Programs\XAMPP\htdocs\themes\cadouri\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d03ca3c4ca3e7_25485958',
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
function content_5d03ca3c4ca3e7_25485958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18402072235d03ca3c4c8663_28602168', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1152840345d03ca3c4c8a55_31735916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_8470166115d03ca3c4c92e1_85684696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11050502805d03ca3c4c8fb1_65741594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8470166115d03ca3c4c92e1_85684696', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18402072235d03ca3c4c8663_28602168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18402072235d03ca3c4c8663_28602168',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1152840345d03ca3c4c8a55_31735916',
  ),
  'page_content' => 
  array (
    0 => 'Block_11050502805d03ca3c4c8fb1_65741594',
  ),
  'hook_home' => 
  array (
    0 => 'Block_8470166115d03ca3c4c92e1_85684696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1152840345d03ca3c4c8a55_31735916', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11050502805d03ca3c4c8fb1_65741594', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
