<?php
// Inclure l'autoload de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Créer une instance de Smarty
$smarty = new \Smarty\Smarty();

// Définir les répertoires pour Smarty
$smarty->setTemplateDir('D:\xampp1\htdocs\Template_Bootstrap-Smarty\smarty\templates'); // Chemin vers les templates
$smarty->setCompileDir('D:\xampp1\htdocs\Template_Bootstrap-Smarty\smarty\templates_c'); // Chemin vers les fichiers compilés
$smarty->setCacheDir('D:\xampp1\htdocs\Template_Bootstrap-Smarty\smarty\cache'); // Chemin vers le cache
$smarty->setConfigDir('D:\xampp1\htdocs\Template_Bootstrap-Smarty\smarty\configs'); // Chemin vers les configurations

// Exemple d'assignation de variables
$smarty->assign('nom', 'utilisateur'); // Vous pouvez assigner d'autres variables ici

// Vérifier si le paramètre 'page' est défini dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil'; // Par défaut, charge la page 'accueil'

// Afficher le template de contenu correspondant
$smarty->display($page . '.tpl'); // Remplacez par le nom de votre fichier template
