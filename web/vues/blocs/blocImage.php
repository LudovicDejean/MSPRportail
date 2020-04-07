<?php
//include '../../autoloader.php';
include '../vueHeaderHTML.php';
include("../vueMenu.php");
include '../../controleurs/c_Image.php';
/**
 *    AFFICHAGE D'UNE IMAGE
 * 
 * require le Controleur du bloc qui fournit des arrays ou des objets
 * 
 * Il faudra ajouter une css
 * 
 */

?>
<link href="./cssImg.css" rel="stylesheet" type="text/css">
<?php
foreach ($tableauimages as $imagess) {
    $legendeImage = $image->legende;
    $numeroImage = $image->numero;
    ?>



    <div class="col-sd-4">
        <div class="row justify-content-center">
            <div class="col-sd-12">
                <div onclick="addModalImg('ep_img<?php echo $numeroImage; ?>')" data-toggle="modal" data-target="#imgModal" class="imgModal ep_img<?php echo $numeroImage; ?> img-fluid"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sd-12">
                <div class="texteCentre ep_leg_img1"><?php echo $numeroImage; ?> - <?php echo $legendeImage; ?></div>
            </div>
        </div>
    </div>
    <?php
}
?>