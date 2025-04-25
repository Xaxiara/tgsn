<?php
include 'include/db.php'; // Inclusion de la connexion à la base de données

// 1. Nombre de véhicules par page
$limit = 6;

// 2. Page courante (par défaut: 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// 3. Calcul de l'offset
$offset = ($page - 1) * $limit;

// 4. Récupérer le nombre total de voitures
$totalQuery = "SELECT COUNT(*) AS total FROM cars";
$stmt = $conn->prepare($totalQuery);
$stmt->execute();
$totalRow = $stmt->fetch(PDO::FETCH_ASSOC);
$totalCars = $totalRow['total'];
$totalPages = ceil($totalCars / $limit);

// 5. Récupérer les voitures avec LIMIT et OFFSET
$sql = "SELECT * FROM cars LIMIT :limit OFFSET :offset";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Rent A Car Start -->
<div class="row">
    <?php
    if (count($cars) > 0) {
        foreach ($cars as $row) {
            echo '<div class="col-lg-4 col-md-6 mb-2">';
            echo '  <div class="rent-item mb-4">';
            echo '    <img class="img-fluid mb-4" src="img/' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['model']) . '">';
            echo '    <h5 class="text-uppercase mb-4">' . htmlspecialchars($row['model']) . ' (' . $row['year'] . ')</h5>';
            echo '    <div class="d-flex justify-content-center mb-4">';
            echo '      <div class="px-2">';
            echo '        <i class="fa fa-car text-primary mr-1"></i><span>' . $row['year'] . '</span>';
            echo '      </div>';
            echo '      <div class="px-2 border-left border-right">';
            echo '        <i class="fa fa-cogs text-primary mr-1"></i><span>' . htmlspecialchars($row['engine_type']) . '</span>';
            echo '      </div>';
            echo '      <div class="px-2">';
            echo '        <i class="fa fa-road text-primary mr-1"></i><span>' . $row['horsepower'] . ' Ch</span>';
            echo '      </div>';
            echo '    </div>';
            echo '    <a class="btn btn-primary px-3" href="car_details.php?id=' . $row['id'] . '">Détails</a>';
            echo '  </div>';
            echo '</div>';
        }
    } else {
        echo "<p>Aucune voiture disponible</p>";
    }
    ?>
</div>

<!-- Pagination -->
<div class="row mt-4">
    <div class="col-12 d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <?php
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">&laquo; Précédent</a></li>';
                }

                for ($i = 1; $i <= $totalPages; $i++) {
                    $active = ($i == $page) ? 'active' : '';
                    echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                }

                if ($page < $totalPages) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Suivant &raquo;</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
<!-- Rent A Car End -->
