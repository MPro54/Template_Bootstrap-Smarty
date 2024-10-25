<?php
/* Smarty version 5.4.1, created on 2024-10-25 21:57:39
  from 'file:contact.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671bf833e3e818_54224532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40598eed593782d393fe50b58399acb49885439' => 
    array (
      0 => 'contact.tpl',
      1 => 1729885562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671bf833e3e818_54224532 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_584843992671bf833e3b557_23697080', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'test.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_584843992671bf833e3b557_23697080 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
?>

    <p>Bonjour <?php echo $_smarty_tpl->getValue('nom');?>
, vous êtes dans la section <strong>Contact</strong></p>
<?php
}
}
/* {/block 'content'} */
}
