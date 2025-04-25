<?php
include 'include/db.php';
?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'include/header.php'; ?>

<style>
    .service-item {
        background-color: #f8f9fa;
        border-radius: 0px;
        padding: 30px 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        height: 100%;
    }
    .service-number {
        font-size: 48px;
        font-weight: bold;
    }
    .description-short {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
        display: inline-block;
        vertical-align: bottom;
    }
    .description-full {
        display: none;
        white-space: pre-line;
        margin-top: 10px;
    }
    .btn-readmore {
        cursor: pointer;
        background: none;
        border: none;
        color:rgb(253, 141, 13);
        padding: 0;
        font-size: 0.9rem;
    }
</style>

<body>
    <?php include 'include/topbar.php'; ?>
    <?php include 'include/navbar.php'; ?>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h5 class="display-1 text-primary text-center">01</h5>
            <h5 class="display-4 text-uppercase text-center mb-5">Bienvenue sur <span class="text-primary">Titanic Gifts et Negoce Service</span></h5>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>Besoin de puissance, de robustesse et de confort sur la route ? 🚙 Les pickups de Titanic Gift vous offrent la liberté d’explorer sans limites. 
                        Que ce soit pour un road trip épique, une mission professionnelle exigeante ou simplement pour le plaisir de conduire un véhicule fiable, nos modèles allient performance et élégance. 
                        Grâce à leur capacité de charge impressionnante et leur conduite fluide, ils sont prêts à vous accompagner partout, du centre-ville aux sentiers les plus reculés. 
                        Montez à bord et laissez l’aventure commencer !</p>
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
                <?php
                $sql = "SELECT * FROM services ORDER BY id ASC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($services) > 0) {
                    $numero = 1;
                    foreach ($services as $row) {
                        $fullDesc = $row['description'];
                        $shortDesc = mb_substr($fullDesc, 0, 150);
                        $needReadMore = (mb_strlen($fullDesc) > 150);
                ?>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                    <i class="fa fa-2x <?= htmlspecialchars($row['icon_class']) ?> text-secondary"></i>
                                </div>
                                <h1 class="display-2 text-white mt-n2 m-0"><?= sprintf("%02d", $numero) ?></h1>
                            </div>
                            <h5 class="text-uppercase mb-3"><?= htmlspecialchars($row['title']) ?></h5>
                            <div class="service-description">
                                <span class="description-short" id="short-<?= $row['id'] ?>">
                                    <?= nl2br(htmlspecialchars($shortDesc)) ?>
                                    <?php if ($needReadMore) echo '...'; ?>
                                </span>
                                <?php if ($needReadMore): ?>
                                    <span class="description-full" id="full-<?= $row['id'] ?>" style="display: none;">
                                        <?= nl2br(htmlspecialchars($fullDesc)) ?>
                                    </span>
                                    <button class="btn-readmore" onclick="toggleDescription(<?= $row['id'] ?>)" id="btn-<?= $row['id'] ?>">Lire plus</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php
                        $numero++;
                    }
                } else {
                    echo "<p class='text-danger'>Aucun service trouvé.</p>";
                }
                ?>
            </div>
        </div>
    </div>
<!-- Services End -->


    <?php include 'include/reduction.php'; ?>

    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <h1 class="display-1 text-primary text-center">03</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Trouvez votre voiture</h1>

            <?php include 'catalogue_voiture.php'; ?>

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
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
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
                        <h5 class="text-uppercase">Merveille GBAGOULE</h5>
                        <p class="m-0">Secrétaire Administratif, Assistante du Directeur</p>
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
                        <h5 class="text-uppercase">Elie Koffi MAWUVI</h5>
                        <p class="m-0">Comptable</p>
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
                        <h5 class="text-uppercase">Maxime LOKO</h5>
                        <p class="m-0">Analyste Programmeur</p>
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
                        <h5 class="text-uppercase">Daniel ABALO</h5>
                        <p class="m-0">Logisticien</p>
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
    <?php 
        // Devenir chauffeur ou partenaire
        include 'include/banner.php'; 
    ?>
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
                    <p class="m-0">Hammer a été fondée en 2004, suite à la constitution de Hammer Holding à l'île Maurice, 
                        en tant que fournisseur de services professionnels pour les réseaux mobiles et fixes. </p>
                </div>

                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/gpac_logo.png" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">GPAC SARL U (Togo)</h5>
                    <p class="m-0">Le Cabinet GPAC peut en amont, faire des apports financiers (prêts) pour payer les impôts, 
                        les frais douaniers et coûts necessaires pour les enlèvements des marchandises.</p>
                </div>

                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/huawei_logo.jpeg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">Huawei</h5>
                    <p class="m-0">Fondée en 1987, Huawei est un fournisseur mondial de premier plan d'infrastructures de
                         technologies de l'information et de la communication (TIC) et d'appareils intelligents.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/gpac_logo.png" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h5 class="text-uppercase mb-2">GPAC SA (Bénin)</h5>
                    <p class="m-0">Le Cabinet GPAC a pour vocation le suivi fiscal, assistance dans les déclarations fiscales, 
                        les déclarations CNSS, l’audit fiscal, la formation et la conduite des études à caractère économique, 
                        statistique, fiscal, financier, juridique et social.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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

    <script>
        function toggleDescription(id) {
            const shortDesc = document.getElementById('short-' + id);
            const fullDesc = document.getElementById('full-' + id);
            const btn = document.getElementById('btn-' + id);
            if (fullDesc.style.display === 'none' || fullDesc.style.display === '') {
                fullDesc.style.display = 'inline';
                shortDesc.style.display = 'none';
                btn.textContent = 'Lire moins';
            } else {
                fullDesc.style.display = 'none';
                shortDesc.style.display = 'inline';
                btn.textContent = 'Lire plus';
            }
        }
    </script>
    
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
