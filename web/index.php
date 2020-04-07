<?php
include("./vues/vueHeaderHTML.php");
include("./vues/vueMenu.php");


if (!isset($_REQUEST['loc'])) {
    $loc = 1;
} else {
    if (is_numeric($_REQUEST['loc']) && ($_REQUEST['loc']) > 0) { // verifier que loc est un entier positif diff de zero
        $loc = $_REQUEST['loc'];
    }
}

switch ($loc) {
    case 1: {
            include("./vues/vueAccueil.php");
            include("./vues/vueFooter.php");

            break;
        }
    case 2: {
            include("./vues/vueContactForm.php");
            include("./vues/vueFooter.php");

            break;
        }
    default : {
            include("./vues/vueAccueil.php");
            include("./vues/vueFooter.php");

            break;
        }
}
?>
<script>  
document.writeln("<br/>screen.width: "+screen.width);  
document.writeln("<br/>screen.height: "+screen.height);  
document.writeln("<br/>screen.availWidth: "+screen.availWidth);  
document.writeln("<br/>screen.availHeight: "+screen.availHeight);  
document.writeln("<br/>screen.colorDepth: "+screen.colorDepth);  
document.writeln("<br/>screen.pixelDepth: "+screen.pixelDepth); 
document.writeln("<br/>navigator.appName is: "+screen.pixelDepth); 
</script>  



