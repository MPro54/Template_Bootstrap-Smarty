<?php
/* Smarty version 5.4.1, created on 2024-10-25 21:57:35
  from 'file:a_propos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671bf82f8db4c4_40077443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b2081fe633be0f8d5498d980ca2817d68e6c91' => 
    array (
      0 => 'a_propos.tpl',
      1 => 1729885601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671bf82f8db4c4_40077443 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_124613152671bf82f8d8280_46576407', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'test.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_124613152671bf82f8d8280_46576407 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
?>

    <p>Bonjour <?php echo $_smarty_tpl->getValue('nom');?>
, vous êtes dans la section <strong>À propos</strong></p>
<?php
}
}
/* {/block 'content'} */
}
