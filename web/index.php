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

YO
<p id="ip">ip ici</p>
<script>
//    document.writeln("<br/>screen.width: " + screen.width);
//    document.writeln("<br/>screen.height: " + screen.height);
//    document.writeln("<br/>screen.availWidth: " + screen.availWidth);
//    document.writeln("<br/>screen.availHeight: " + screen.availHeight);
//    document.writeln("<br/>screen.colorDepth: " + screen.colorDepth);
//    document.writeln("<br/>screen.pixelDepth: " + screen.pixelDepth);
//    document.writeln("<br/>navigator.appName is: " + screen.pixelDepth);
//    document.writeln("<br/>Browser CodeName: " + navigator.appCodeName);
//    document.writeln("<br/>Browser Name: " + navigator.appName);
//    document.writeln("<br/>Browser Version: " + navigator.appVersion);
//    document.writeln("<br/>Cookies Enabled: " + navigator.cookieEnabled);
//    document.writeln("<br/>Platform: " + navigator.platform);
//    document.writeln("<br/>User-agent header: " + navigator.userAgent);
    
    let infosUser = {
    "screen.width" : screen.width,
    "screen.height" : screen.height,
    "screen.availWidth" : screen.availWidth,
    "screen.availHeight" : screen.availHeight,
    "screen.colorDepth" : screen.colorDepth,
    "screen.pixelDepth" : screen.pixelDepth,
    "navigator.appName is" : screen.pixelDepth,
    "Browser CodeName" : navigator.appCodeName,
    "Browser Name" : navigator.appName,
    "Browser Version" : navigator.appVersion,
    "Cookies Enabled" : navigator.cookieEnabled,
    "Platform" : navigator.platform,
    "User-agent header" : navigator.userAgent
    };

    console.log(infosUser);
    
        $(document).ready(function() {
      $.getJSON("https://api.ipify.org/?format=json", function(e) {
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



