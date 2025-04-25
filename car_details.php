<?php
include 'include/db.php';

if (!isset($_GET['id'])) {
    die("Aucun véhicule sélectionné.");
}

$id = intval($_GET['id']);

// Récupération du véhicule
$stmt = $conn->prepare("SELECT * FROM cars WHERE id = ?");
$stmt->execute([$id]);
$car = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$car) {
    die("Véhicule introuvable.");
}

// Récupération de la galerie
$gallery_stmt = $conn->prepare("SELECT image_path FROM car_images WHERE car_id = ?");
$gallery_stmt->execute([$id]);
$gallery_images = $gallery_stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

    <?php include 'include/header.php'; ?>

    <body>
    <?php include 'include/topbar.php'; ?>
    <?php include 'include/navbar.php'; ?>

    <div class="container mt-4">
        <a href="car.php" class="btn btn-secondary mb-4">← Retour au catalogue</a>
        <div class="row">
            <!-- Image principale -->
            <div class="col-md-6">
                <img id="main-car-image" 
                    src="img/<?= htmlspecialchars($car['image_url']) ?>" 
                    alt="<?= htmlspecialchars($car['model']) ?>" 
                    class="img-fluid rounded" 
                    style="max-width: 100%; height: auto;">
            </div>

            <!-- Détails -->
            <div class="col-md-6">
                <h2><?= htmlspecialchars($car['brand'] . ' ' . $car['model']) ?></h2>
                <p class="text-muted"><?= htmlspecialchars($car['year']) ?> • <?= htmlspecialchars($car['engine_type']) ?> • <?= htmlspecialchars($car['engine_capacity']) ?></p>
                <p><strong>Puissance :</strong> <?= htmlspecialchars($car['horsepower']) ?> ch</p>
                <p><strong>Transmission :</strong> <?= htmlspecialchars($car['transmission']) ?></p>
                <p><strong>Carburant :</strong> <?= htmlspecialchars($car['fuel_type']) ?></p>
                <p><strong>Places :</strong> <?= htmlspecialchars($car['seats']) ?> • <strong>Portes :</strong> <?= htmlspecialchars($car['doors']) ?></p>
                <p><strong>Couleur :</strong> <?= htmlspecialchars($car['color']) ?></p>

                <ul class="list-group mb-3">
                    <li class="list-group-item">Climatisation : <?= $car['air_conditioning'] ? 'Oui' : 'Non' ?></li>
                    <li class="list-group-item">GPS : <?= $car['gps'] ? 'Oui' : 'Non' ?></li>
                    <li class="list-group-item">Caméra : <?= $car['camera'] ? 'Oui' : 'Non' ?></li>
                    <li class="list-group-item">Bluetooth : <?= $car['bluetooth'] ? 'Oui' : 'Non' ?></li>
                    <li class="list-group-item">Assurance incluse : <?= $car['insurance_included'] ? 'Oui' : 'Non' ?></li>
                </ul>

                <p><strong>Description :</strong> <?= nl2br(htmlspecialchars($car['description'])) ?></p>

                <div class="mt-4">
                    <h4>Prix</h4>
                    <p><strong>Location :</strong> <?= number_format($car['price_per_day'], 2) ?> f CFA/jour</p>
                    <p><strong>Vente :</strong> <?= number_format($car['price_sale'], 2) ?> f CFA</p>
                    <p><strong>Caution :</strong> <?= number_format($car['caution_fee'], 2) ?> f CFA</p>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <a href="reserve_car.php?id=<?= $car['id'] ?>" class="btn btn-primary btn-small">Réserver ce véhicule</a>
                    <a href="buy_car.php?id=<?= $car['id'] ?>" class="btn btn-success btn-small">Acheter ce véhicule</a>
                </div>
            </div>

            <!-- Galerie -->
            <?php if (!empty($gallery_images)): ?>
                <div class="col-12 mt-5">
                    <h4 class="mb-3">Galerie du véhicule</h4>
                    <div class="d-flex overflow-auto gap-2">
                        <?php foreach ($gallery_images as $img): ?>
                            <img src="<?= htmlspecialchars($img['image_path']) ?>"
                                alt="Image galerie"
                                class="img-thumbnail"
                                style="height: 100px; width: auto; cursor: pointer;">
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const thumbnails = document.querySelectorAll('.img-thumbnail');
            const mainImage = document.querySelector('#main-car-image');

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', () => {
                    mainImage.src = thumbnail.src;
                });
            });
        });
    </script>

    </body>
</html>
