<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Bootstrap & Smarty</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {include file='../../includes/nav.php'} <!-- Inclusion du fichier de navigation -->
    <div class="container mt-4">
        <h1>Bienvenue dans Template Bootstrap & Smarty</h1>
        <p class="lead">Ceci est une démo utilisant Bootstrap et Smarty pour afficher des contenus dynamiques.</p>
        
        <!-- Section dynamique -->
        <div style="border: 1px solid gray; border-radius: 5px; padding: 15px;">
            <div style="text-align: center;">
                {block name='content'}{/block}
            </div>        
        </div>
        
    </div>

      <!-- Scripts Bootstrap -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
