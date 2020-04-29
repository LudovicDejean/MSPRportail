<?php
include("./vues/vueHeaderHTML.php");
include("./vues/vueMenu.php");
session_name('Résilience');
session_start();

// AFFICHAGE DES ERREURS POUR LE DEV: 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_REQUEST['loc'])) {
    $loc = 1;
} else {
    if (is_numeric($_REQUEST['loc']) && ($_REQUEST['loc']) > 0) { // verifier que loc est un entier positif diff de zero
        $loc = $_REQUEST['loc'];
    }
}
var_dump($_SERVER['REMOTE_ADDR']);
var_dump($_POST);
var_dump($_SESSION);

switch ($loc) {
    case 1: {
//        ACCUEIL 
//        TODO !!!!
//        Pour le cas de la déco : Vider la session et le cookie
            if ($_POST) {
                if ($_POST['decoButton'] === 'deco') {
                    session_destroy();
                }
            }
            if ($_SESSION) {
//            if connecté
                include("./vues/vueConnected.php");
            } else {
//        if Pas connecté
                include("./vues/vueAccueil.php");
            }
            include("./vues/vueFooter.php");
            break;
        }
    case 2: {
//        CONTACT
            include("./vues/vueContactForm.php");
            include("./vues/vueFooter.php");
            break;
        }
    case 3: {
//              MODIFICATION USER
            include("./vues/vueEditUser.php");
            include("./vues/vueFooter.php");
            break;
        }
    default : {
            include("./vues/vueAccueil.php");
            include("./vues/vueFooter.php");
            break;
        }
}
// INSERER L'AFFICHAGE QUI PREVIENT DE L'UTILISATION DES COOKIES
?>


<script>
    /***
     * 
     * Récupération des informations sur la configuration matérielle de l'utilisateur
     * 
     * 
     * @type object
     */
    let infosUser = {
        "screen.width": screen.width,
        "screen.height": screen.height,
        "screen.availWidth": screen.availWidth,
        "screen.availHeight": screen.availHeight,
        "screen.colorDepth": screen.colorDepth,
        "screen.pixelDepth": screen.pixelDepth,
        "navigator.appName is": screen.pixelDepth,
        "Browser CodeName": navigator.appCodeName,
        "Browser Name": navigator.appName,
        "Cookies Enabled": navigator.cookieEnabled,
        "Platform": navigator.platform,
    };

    console.log(infosUser);
    
    

//    let url = "https://haveibeenpwned.com/unifiedsearch/nimenia.duforestel@gmail.com"
//    fetch(url)
//            .then(function (response) {
//                console.log(response);
//                document.getElementById('ip').innerHTML = response;
//            })
//            .catch(function (error) {
//                console.log(error);
//            });

</script>



