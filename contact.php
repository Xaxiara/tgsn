<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php'; ?>

<body>

<?php include 'include/topbar.php'; ?>

<?php include 'include/navbar.php'; ?>

<!--?php include 'include/search.php'; ? -->

<!-- Search Start -->
<div class="container-fluid bg-white pt-3 px-lg-5">

</div>

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <form method="POST" action="message.php">
    <div class="row">
        <div class="col-6 form-group">
            <input type="text" name="name" class="form-control p-4" placeholder="Votre nom" required>
        </div>
        <div class="col-6 form-group">
            <input type="email" name="email" class="form-control p-4" placeholder="Votre e-mail" required>
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control p-4" placeholder="Objet" required>
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control py-3 px-4" rows="5" placeholder="Message" required></textarea>
    </div>
    <div>
        <button class="btn btn-primary py-3 px-5" type="submit">Envoyer un Message</button>
    </div>
</form>
<!-- Contact End -->


    <?php include 'include/footer.php'; ?>

    <!-- Back to Top -->
    <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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