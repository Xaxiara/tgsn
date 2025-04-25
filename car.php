<?php
require_once 'include/db.php'; // Assure-toi que ce fichier contient bien $pdo

// Récupération des données de recherche
$brand = $_GET['brand'] ?? '';
$model = $_GET['model'] ?? '';
$year = $_GET['year'] ?? '';
$engine_type = $_GET['engine_type'] ?? '';
$max_price = $_GET['max_price'] ?? '';

// Construction dynamique de la requête SQL
$sql = "SELECT * FROM cars WHERE 1=1";
$params = [];

if (!empty($brand)) {
    $sql .= " AND brand LIKE :brand";
    $params[':brand'] = '%' . $brand . '%';
}

if (!empty($model)) {
    $sql .= " AND model LIKE :model";
    $params[':model'] = '%' . $model . '%';
}

if (!empty($year)) {
    $sql .= " AND year >= :year";
    $params[':year'] = $year;
}

if (!empty($engine_type)) {
    $sql .= " AND engine_type = :engine_type";
    $params[':engine_type'] = $engine_type;
}

if (!empty($max_price)) {
    $sql .= " AND price_per_day <= :max_price";
    $params[':max_price'] = $max_price;
}

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la recherche : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'include/header.php'; ?>

<body>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- Search Start -->
<div class="container-fluid bg-white pt-3 px-lg-5">
    <form action="car.php" method="GET">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="text" name="brand" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Marque" value="<?= htmlspecialchars($brand) ?>">
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="text" name="model" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Modèle" value="<?= htmlspecialchars($model) ?>">
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="number" name="year" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Année min." value="<?= htmlspecialchars($year) ?>">
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select name="engine_type" class="custom-select px-4 mb-3" style="height: 50px;">
                    <option value="">Type de moteur</option>
                    <?php
                    $types = ['Essence', 'Diesel', 'Électrique', 'Hybride'];
                    foreach ($types as $type) {
                        $selected = ($engine_type == $type) ? 'selected' : '';
                        echo "<option value=\"$type\" $selected>$type</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="number" step="0.01" name="max_price" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Prix max/jour (F CFA)" value="<?= htmlspecialchars($max_price) ?>">
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Rechercher</button>
            </div>
        </div>
    </form>
</div>
<!-- Search End -->

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Catalogue des véhicules</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Liste de voitures</h6>
    </div>
</div>
<!-- Page Header End -->

<!-- Résultats de la recherche -->
<div class="container py-5">
    <div class="row">
        <?php if (!empty($cars)): ?>
            <?php foreach ($cars as $car): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if (!empty($car['image_url'])): ?>
                            <img src="img/<?= htmlspecialchars($car['image_url']) ?>" class="card-img-top" alt="<?= $car['brand'] . ' ' . $car['model'] ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($car['brand'] . ' ' . $car['model']) ?> (<?= $car['year'] ?>)</h5>
                            <p class="card-text">Moteur: <?= $car['engine_type'] ?> | Prix/jour: <?= number_format($car['price_per_day'], 0, ',', ' ') ?> F CFA</p>
                            <a href="car_details.php?id=<?= $car['id'] ?>" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p>Aucun véhicule trouvé selon vos critères.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
