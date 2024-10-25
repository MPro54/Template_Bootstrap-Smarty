<?php
/* Smarty version 5.4.1, created on 2024-10-25 21:57:28
  from 'file:test.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671bf8283f5368_55191969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2411daa54eeb173d78fa2aa8dcefe4410f4d8c' => 
    array (
      0 => 'test.tpl',
      1 => 1729886246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../includes/nav.php' => 1,
  ),
))) {
function content_671bf8283f5368_55191969 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Bootstrap Smarty</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php $_smarty_tpl->renderSubTemplate('file:../../includes/nav.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> <!-- Inclusion du fichier de navigation -->
    <div class="container mt-4">
        <h1>Bienvenue dans TemplateBootstrapSmarty</h1>
        <p class="lead">Ceci est une démo utilisant Bootstrap et Smarty pour afficher des contenus dynamiques.</p>
        
        <!-- Section dynamique -->
        <div style="border: 1px solid gray; border-radius: 5px; padding: 15px;">
            <div style="text-align: center;">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_930606471671bf8283f26e7_12086830', 'content');
?>

            </div>        
        </div>
        
    </div>

      <!-- Scripts Bootstrap -->
      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
/* {block 'content'} */
class Block_930606471671bf8283f26e7_12086830 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates';
}
}
/* {/block 'content'} */
}
