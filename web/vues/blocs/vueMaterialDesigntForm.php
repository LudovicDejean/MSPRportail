<div class="container" id="contenu">
    <!--Section: Contact v.2-->
    <section class="mb-4">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Une question ? Une suggestion ? Une oeuvre vous plaît ? Posez moi votre question, je vous répondrai au plus vite !</p>
        <div class="container">
            <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="" hidden>Votre nom</label>
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="Votre nom..." autofocus>
                                    <br/>
                                </div>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="" hidden>Votre email</label>
                                    <input type="text" id="email" name="email" class="form-control" required placeholder="Votre email..." >
                                    <br/>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="" hidden>Sujet</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required placeholder="Le sujet de votre message...">
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Votre message :</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                    <br/>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        <!--      - - - - - - -    GOOGLE RECAPCHA 3   - - - - - - - - - -     -->
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="action" value="validate_captcha">
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
<?php

?>
    <script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6Lf5kr8UAAAAAHR3aMCDuxxlP2Z6PWWFnOABC0MT', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>