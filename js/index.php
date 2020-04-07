<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex" />
 </head>
 <body>
  <!--<p>Accès interdit</p>-->
 </body>

<?php

/* 
 * Page de redirection
 * Attention à la syntaxe !
 * L'interet est de crér un fichier nommé index.php dans tous les dossiers de mon site 
 * ex : image, script, css....
 * Ainsi, chaque fois que quelqu'un essaiera d'entrer dans ces dossiers là,
 * au lieu de visualiser le contenu duy dossier, il sera redirigé !
 * Je protège ainsi mes données !
 */

header('location:../index.php');
?>
</html>