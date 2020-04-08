<div class="container" id="contenu">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">MODIFIER VOS INFORMATIONS</h2>
        <p class="text-center w-responsive mx-auto mb-5"></p>
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="editUserForm" name="editUserForm" action="index.php?loc=1" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="md-form mb-0">
                                    <div class="field">
                                        <input type="text" id="name" name="login" class="form-control border-success" required placeholder="">
                                        <label for="name" class="mt-1 pl-2">Modifier votre login</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="field">
                                        <input type="text" id="email" name="email" class="form-control  border-warning" required placeholder="" >
                                        <label for="email" class="mt-1 pl-2" >Modifier votre email</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <div class="field">
                                        <input type="password" id="subject" name="subject" class="form-control border-danger" required placeholder="">
                                        <label for="subject" class="mt-1 pl-2" >Modifier votre mot de passe</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                                <div class="text-center text-md-left">
                                    <input class="mt-3 btn btn-secondary text-center" value="Enregistrer les modifications" type="submit" onclick="document.getElementById('editUserForm').submit();">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col">
                            <div class="text-center text-md-left">
                                <form id="editUserForm" name="cancelModifUserForm" action="index.php?loc=1" method="POST">
                                    <input class="btn btn-secondary text-center mt-3" name="annulerEditUser" value="Revenir en arrière" type="submit">
                                </form>
                                <div class="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

