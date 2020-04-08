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
//        ACCUEIL
//        if Pas connecté
//        Pourle cas de la déco : Vider la session et le cookie

            include("./vues/vueAccueil.php");
//            if connecté
            include("./vues/vueConnected.php");
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

YO
<p id="ip">ip ici</p>
<script>
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
        "Browser Version": navigator.appVersion,
        "Cookies Enabled": navigator.cookieEnabled,
        "Platform": navigator.platform,
        "User-agent header": navigator.userAgent
    };

    console.log(infosUser);

    $(document).ready(function () {
        $.getJSON("https://api.ipify.org/?format=json", function (e) {
            $('.ip').text(e.ip);
        });
    });

//    
//    var url = "https://haveibeenpwned.com/unifiedsearch/nimenia.duforestel@gmail.com"
//fetch(url)
//.then(function(response) {
//    console.log(response);
//})
//.catch(function(error) {
//    console.log(error);
//});
//    
</script>



