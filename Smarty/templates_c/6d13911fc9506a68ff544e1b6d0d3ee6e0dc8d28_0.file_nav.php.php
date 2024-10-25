<?php
/* Smarty version 5.4.1, created on 2024-10-25 22:11:43
  from 'file:D:\xampp1\htdocs\Template_Bootstrap-Smarty\smarty\templates\../../includes/nav.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671bfb7f9c6577_33580061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d13911fc9506a68ff544e1b6d0d3ee6e0dc8d28' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\smarty\\templates\\../../includes/nav.php',
      1 => 1729886914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671bfb7f9c6577_33580061 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp1\\htdocs\\Template_Bootstrap-Smarty\\includes';
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Template Bootstrap & Smarty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?page=accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=a_propos">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<?php }
}
