// - - - - - - - - - - -  PERMUATIONS CLASSES PRESENTATION IMAGES
function espacerLesImages() {
    let margBottom = document.querySelectorAll('.padBottom')
    margBottom.forEach(function (element) {
        if (screen.width < 768) {
            element.classList.remove('my-auto');
            element.classList.add('mb-5');
        } else {
            element.classList.remove('mb-5');
            element.classList.add('my-auto');
        }
    });
}
espacerLesImages();
window.addEventListener('resize', espacerLesImages(), false);
window.onresize = espacerLesImages();




//   - - - - - -- - - - - - - -   BOUTON DE RETOUR EN HAUT DE PAGE    - - - - - - - -
window.onscroll = function () {
    scrollFunction()
};
function scrollFunction() {
    stiqueCa();
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


//  - - - - - - - - - - -     FENETRE MODALE IMAGES   - - - - - - - - - - - - - - 
if (window.matchMedia("(min-width: 768px)").matches) {
    /* La largeur minimum de l'affichage est 600 px inclus */
    function addModalImg(classeEnPlus) {
// recuperation de l'url de l'image à partir la classe css de la petite image
        let elem, style, classeCss, newUrl;
        classeCss = '.' + classeEnPlus;
        //console.log(classeCss);
        elem = document.querySelector(classeCss);
        style = getComputedStyle(elem);
        miniUrl = style.backgroundImage
        miniUrl = miniUrl.substr(0, (miniUrl.length) - 2);
        miniUrl = miniUrl.substr(5);
        partie = miniUrl.split("/Resized_mini");
        newUrl = partie[0] + partie[1];
        //console.log(newUrl);
        // Url de l'image à afficher dans la fenetre modale
        document.getElementById("grandeImgModale").src = newUrl;
    }
    function removeModalClassImg() {
        function removeIt() {
            document.getElementById("grandeImgModale").className = 'center_fit';
            document.getElementById("grandeImgModale").src = '';
        }
        setTimeout(removeIt(), 1000);
    }
} else {
    /* L'affichage est inférieur à 600px de large */
}
//   - - - - - - - - - - -     FIN MODALE


//  - - - - - -   MODALE 2    - - - - - - -
function addModalImage(classeEnPlus) {

}
//  - - - - - -   FIN   MODALE 2    - - - - - - -


//  - - - - - - - - - - - - - -   STICKY MENU   - - - - - - - - - - 
// When the user scrolls the page, execute myFunction
//window.onscroll = function() {stiqueCa()};
// Get the navbar
var navbar = document.getElementById("navbar");
var contenu = document.getElementById("contenu");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stiqueCa() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("colle");
        navbar.classList.add("container");
//        navbar.classList.add("container");
        contenu.classList.add("decalageSticky");
    } else {
        navbar.classList.remove("colle");
        contenu.classList.remove("decalageSticky");

    }
}
// - - - - - - - - - -   FIn STICKY  - - - - - - - - - - - - 


//  - - - - - - - - - -   GERE LA VISIBIILITE :  visibleOuPas    - - - - - - - - - 
function visibleOuPas(idDuTruc) {

    let x = document.getElementById(idDuTruc);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

//    
//    
//    
//    elem = document.getElementById(idDuTruc);
//    elem.removeChild();
//        elem.parentNode.removeChild(elem);


//}
