<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container mt-5 mb-5" id="contenu">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col texteAccueil2">
                    <h4 class="h4-responsive font-weight-bold text-center my-4 mt-5 mb-5"><strong>Se connecter</strong></h4>
                    <form id="accueil-form" name="accueil-form" action="index.php?loc=1" method="POST">
                        <p> <input type="text" id="logUser" name="login" class="form-control  border-warning" required placeholder="">
                            <label for="logUser" class="mt-1 pl-2">Votre Login</label></p>
                        <p> <input type="password" id="passUser" name="password" class="form-control  border-warning" required placeholder="">
                            <label for="passUser" class="mt-1 pl-2">Votre Mot de passe</label></p>
                        <p><input class="btn btn-secondary text-center" value="Envoyer" type="submit"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>