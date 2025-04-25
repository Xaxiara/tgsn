<!DOCTYPE html>
<html lang="fr">

<?php include 'include/header.php'; ?>

<body>
    <?php include 'include/topbar.php'; ?>

    <?php include 'include/navbar.php'; ?>
    
    <!--?php include 'include/search.php'; ? -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h5 class="display-1 text-primary text-center">01</h5>
            <h5 class="display-4 text-uppercase text-center mb-5">Bienvenue sur <span class="text-primary">Titanic Gifts et Negoce Service</span></h5>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>Besoin de puissance, de robustesse et de confort sur la route ? 🚙 Les pickups de Titanic Gifts vous offrent la liberté d’explorer sans limites. 
                        Que ce soit pour un road trip épique, une mission professionnelle exigeante ou simplement pour le plaisir de conduire un véhicule fiable, nos modèles allient performance et élégance. 
                        Grâce à leur capacité de charge impressionnante et leur conduite fluide, ils sont prêts à vous accompagner partout, du centre-ville aux sentiers les plus reculés. 
                        Montez à bord et laissez l’aventure commencer !</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Assistance 24h/24 et 7j/7</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Location de voiture à moyen et long terme</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h5 class="text-uppercase m-0">Beaucoup de lieux de prise en charge</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
<!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h5 class="display-1 text-primary text-center">02</h5>
            <h5 class="display-4 text-uppercase text-center mb-5">Nos Services</h5>
            <div class="row">
                <?php include 'include/services.php'; ?>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h1 class="display-1 text-primary text-center">03</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Trouvez votre voiture</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-1.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Changan Hunter Plus (Kaicene F70)</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2024</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur diesel ou essence</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>150 - 200 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-2.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Peugeot Dongfeng Rich 6</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2022</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur diesel ou essence</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>132 - 163 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-3.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Peugeot Dongfeng Rich 6</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2022</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur diesel ou essence</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>132 - 163 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-5.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Toyota Hilux Revo</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2020</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur Diesel</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>150 - 204 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-7.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Toyota Hilux Revo</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2020</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur Diesel</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>150 - 204 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car-rent-8.jpeg" alt="">
                        <h5 class="text-uppercase mb-4">Toyota Hilux</h5>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2024</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Moteur Diesel</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>150 - 204 Ch</span>
                            </div>
                        </div>
                        <!--a class="btn btn-primary px-3" href="">$99.00/Day</a-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-1 text-primary text-center">04</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Notre équipe</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-1.jpeg" alt="">
                    <div class="position-relative py-4">
                        <h5 class="text-uppercase">Karim ADIDO</h5>
                        <p class="m-0">Docteur en Economie, Administrateur des impôts, Expert Agréé près des Cours et Tribunaux,
                            DG du Cabinet GPAC.</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                    <div class="position-relative py-4">
                        <h5 class="text-uppercase">Full Name</h5>
                        <p class="m-0">Designation</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="position-relative py-4">
                        <h5 class="text-uppercase">Full Name</h5>
                        <p class="m-0">Designation</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                    <div class="position-relative py-4">
                        <h5 class="text-uppercase">Full Name</h5>
                        <p class="m-0">Designation</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-5.jpeg" alt="">
                    <div class="position-relative py-4">
                        <h5 class="text-uppercase">Bruno AZONHOUMON</h5>
                        <p class="m-0">Juriste, Responsable des appels d'offres publiques et Assistant du Directeur Général.</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Envie d’être chauffeur ?</h3>
                            <p class="mb-4">Envoyez nous un message à travers le formulaire de contact</p>
                            <a class="btn btn-primary py-2 px-4" href="contact.php">Formulaire</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Vous cherchez une voiture ?</h3>
                            <p class="mb-4">Envoyez nous un message à travers le formulaire de contact</p>
                            <a class="btn btn-primary py-2 px-4" href="contact.php">Formulaire</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-1 text-primary text-center">05</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Nos clients et partenaires</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/hammerlogo.webp" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">Hammer Group</h5>
                    <!--i class="mb-2">Profession</i-->
                    <p class="m-0">Hammer a été fondée en 2004, suite à la constitution de Hammer Holding à l'île Maurice, 
                        en tant que fournisseur de services professionnels pour les réseaux mobiles et fixes. </p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/huawei_logo.jpeg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">Huawei</h5>
                    <!--i class="mb-2">Profession</i-->
                    <p class="m-0">Fondée en 1987, Huawei est un fournisseur mondial de premier plan d'infrastructures de
                         technologies de l'information et de la communication (TIC) et d'appareils intelligents.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/gpac_logo.png" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">GPAC SA (Bénin)</h5>
                    <!--i class="mb-2">Profession</i-->
                    <p class="m-0">Le Cabinet GPAC a pour vocation le suivi fiscal, assistance dans les déclarations fiscales, 
                        les déclarations CNSS, l’audit fiscal, la formation et la conduite des études à caractère économique, 
                        statistique, fiscal, financier, juridique et social.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/gpac_logo.png" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">GPAC SARL U (Togo)</h5>
                    <!--i class="mb-2">Profession</i-->
                    <p class="m-0">Le Cabinet GPAC peut en amont, faire des apports financiers (prêts) pour payer les impôts, 
                        les frais douaniers et coûts necessaires pour les enlèvements des marchandises.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h1 class="display-1 text-primary text-center">06</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Nous contacter</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Votre nom" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" placeholder="Votre e-mail" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Objet" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Envoyer un Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Direction Générale</h5>
                                <p>Bénin - Cotonou, Menontin</p>
                                <p>Tél: (+229) 01 97 17 52 71 / 01 99 52 79 71</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Siège social</h5>
                                <p>Togo - Lomé, Hédzranawoé, immeuble BOA en face du Grand Séminaire Saint Jean Paul II</p>
                                <p>Tél: (+228) 98 38 19 68</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Notre courriel</h5>
                                <p>titanicnegoce@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/car-rent-1.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-2.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-3.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-4.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-5.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-6.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-7.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/car-rent-8.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <?php include 'include/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>