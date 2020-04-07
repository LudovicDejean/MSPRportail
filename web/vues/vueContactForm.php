<div class="container" id="contenu">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
        <p class="text-center w-responsive mx-auto mb-5">Une question ?</p>
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="md-form mb-0">
                                    <div class="field">

                                        <input type="text" id="name" name="name" class="form-control border-success" required placeholder="">
                                        <label for="name" class="mt-1 pl-2">Votre nom</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="field">
                                        <input type="text" id="email" name="email" class="form-control  border-warning" required placeholder="" >
                                        <label for="email" class="mt-1 pl-2" >Votre email</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <div class="field">
                                        <input type="text" id="subject" name="subject" class="form-control border-danger" required placeholder="">
                                        <label for="subject" class="mt-1 pl-2" >Le sujet de votre message</label>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mt-5">
                                    <label for="message">Votre message :</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea border-info" required></textarea>
                                    <br/>
                                </div>

                            </div>
                        </div>
                        <!--      - - - - - - -    GOOGLE RECAPCHA 3   - - - - - - - - - -     -->
                        <!-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"> -->
                        <!-- <input type="hidden" name="action" value="validate_captcha"> -->
                        <!---------------------------------------------------------->
                        <div class="text-center text-md-left">
                            <input class="btn btn-secondary text-center" value="Envoyer" type="submit" onclick="document.getElementById('contact-form').submit();">
                        </div>
                        <div class="status"></div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</div>

