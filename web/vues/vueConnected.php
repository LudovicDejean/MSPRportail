<?php
//session_name('resilience');
//session_start();
//$_SESSION['connected'] = true;
?>

<div class="container mt-5 mb-5" id="contenu">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col texteAccueil2">
                    <h2 class="mt-5 mb-5">VOUS ETES CONNECT&Eacute;(E)</h2>
                    <form id="accueil-form" name="modifUser" action="index.php?loc=3" method="POST">
                        <p><input class="btn btn-secondary text-center" value="Modifier login ou mot de passe" type="submit"></p>
                    </form>
                    <form id="accueil-form" name="deconnexionForm" action="index.php?loc=1" method="POST">
                        <p><button name='decoButton' class="btn btn-secondary text-center" value="deco" type="submit">Se d&eacute;connecter</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>