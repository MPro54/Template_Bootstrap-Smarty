<?php
/* Smarty version 5.4.1, created on 2024-10-25 21:54:33
  from 'file:accueil.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671bf779e82f38_25948735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e93d00692771245ed7b9624f4fbdf9d2a7f82a0' => 
    array (
      0 => 'accueil.tpl',
      1 => 1729885589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671bf779e82f38_25948735 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_997509280671bf779da0c55_13809973', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'test.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_997509280671bf779da0c55_13809973 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
?>

    <p>Bonjour <?php echo $_smarty_tpl->getValue('nom');?>
, vous êtes dans la section <strong>Accueil</strong></p>
<?php
}
}
/* {/block 'content'} */
}
