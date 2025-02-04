<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/fond-<?php $var_img = random_int(1,4); echo $var_img;?>.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Nous contacter</h1>
                    </div>
                    <p class="mb-4 pb-2">Merci de votre intérêt pour nos services hospitaliers. Veuillez remplir le formulaire ci-dessous pour toute demande d'information, de rendez-vous ou pour nous faire part de vos questions et commentaires. Notre équipe dévouée vous répondra dans les plus brefs délais.</p>
                    <form method ="post" action ="traitement/traitement_contact.php">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Votre Nom" style="height: 55px;" name="nom">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Votre Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Object" style="height: 55px;" name="object">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Votre message" name='message'></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Soumettre</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
