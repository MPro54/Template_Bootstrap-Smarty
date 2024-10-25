{* Utilisation du fichier test.tpl comme base pour le contenu *}
{extends file='test.tpl'}

{* Début du bloc de contenu qui sera inséré dans la section définie dans test.tpl *}
{block name='content'}
    <p>Bonjour {$nom}, vous êtes dans la section <strong>Accueil</strong></p>
{/block}
