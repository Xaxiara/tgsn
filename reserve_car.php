<?php
include 'include/db.php';

if (!isset($_GET['id'])) {
    echo "Aucun véhicule sélectionné.";
    exit;
}

$id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM cars WHERE id = ?");
$stmt->execute([$id]);
$car = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$car) {
    echo "Véhicule introuvable.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'include/header.php'; ?>

<body>
    <?php include 'include/topbar.php'; ?>
    <?php include 'include/navbar.php'; ?>

    <div class=" container my-5">
        <h1>Réserver le véhicule : <?php echo htmlspecialchars($car['model']); ?></h1>
        <p><strong>Prix par jour :</strong> <?php echo $car['price_per_day']; ?> F CFA</p>
        <form action="traitement_reservation.php" method="post">
            <input type="hidden" name="car_id" value="<?php echo $car['id']; ?>">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="numeric" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="date_debut" class="form-label">Date de début</label>
                <input type="date" class="form-control" name="date_debut" required>
            </div>
            <div class="mb-3">
                <label for="date_fin" class="form-label">Date de fin</label>
                <input type="date" class="form-control" name="date_fin" required>
            </div>
            <button type="submit" class="btn btn-primary">Confirmer la réservation</button>
        </form>
    </div>
</body>
</html>
