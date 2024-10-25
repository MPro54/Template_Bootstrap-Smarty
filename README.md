# Template d'utilisation de Bootstrap et Smarty


## Description
TemplateBootstrapSmarty est un projet PHP qui utilise le moteur de templates Smarty pour gérer et afficher des contenus dynamiques. Ce projet démontre l'intégration de Smarty avec Composer, facilitant la gestion et l'affichage des templates dans une application web.


## Fonctionnalités
 - Intégration de Smarty pour le rendu dynamique des pages. 
 - Utilisation de Bootstrap pour un design responsive et moderne. 
 - Gestion facile des dépendances avec Composer.


## Prérequis
- PHP 7.2 ou supérieur
- Composer


##  Instructions d'installation : 
 1. Clonez le dépôt : git clone https://github.com/MPro54/Template_Bootstrap-Smarty.git 
 2. Accédez au répertoire du projet : cd Template_Bootstrap-Smarty 
 3. Installez les dépendances avec Composer : composer install 
 4. Pour visualiser le projet, lancez un serveur local comme XAMPP et accédez à http://localhost/Template_Bootstrap-Smarty dans votre navigateur. 


## Utilisation
 1. Configurez les chemins des templates dans votre fichier `index.php`.
 2. Créez vos fichiers `.tpl` dans le répertoire `smarty/templates`.
 3. Assurez-vous que les répertoires `smarty/templates_c`, `smarty/cache`, et `smarty/configs` existent et sont accessibles en écriture.


## Exemples de fichiers : 
- index.php : Gère le routage et le rendu des templates.
- test.tpl (dossier smarty/templates, structure centrale) : Base pour d'autres pages. 
- accueil.tpl, a_propos.tpl, contact.tpl : Pages de contenu dynamique. 


## Liens des ressources officielles : 
- [Smarty Documentation](https://smarty-php.github.io/smarty/stable/)
- [Bootstrap](https://getbootstrap.com/)
- [Composer](https://getcomposer.org/)


## Remarques
N’hésitez pas à personnaliser ce modèle de base en fonction de votre projet !
