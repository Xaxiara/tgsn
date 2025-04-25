<?php
include 'include/db.php';
?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'include/header.php'; ?>

<style>
    .service-item {
        background-color: #f8f9fa;
        border-radius: 15px;
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
        white-space: pre-line; /* Pour respecter les \n */
        margin-top: 10px;
    }
    .btn-readmore {
        cursor: pointer;
        background: none;
        border: none;
        color: #0d6efd;
        padding: 0;
        font-size: 0.9rem;
    }
</style>

<body>

<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="text-uppercase">Nos Services</h2>
    </div>
    <div class="row justify-content-center">
        <?php
        $sql = "SELECT * FROM services ORDER BY id ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($services) > 0) {
            $numero = 1;
            foreach ($services as $row) {
                // Couper description pour aperçu (150 caractères max)
                $fullDesc = $row['description'];
                $shortDesc = mb_substr($fullDesc, 0, 150);
                $needReadMore = (mb_strlen($fullDesc) > 150);
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="service-item w-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x <?= htmlspecialchars($row['icon_class']) ?> text-white"></i>
                            </div>
                            <div class="service-number text-primary"><?= sprintf("%02d", $numero) ?></div>
                        </div>
                        <h5 class="text-uppercase mb-3"><?= htmlspecialchars($row['title']) ?></h5>
                        <div class="service-description">
                            <span class="description-short" id="short-<?= $row['id'] ?>"><?= nl2br(htmlspecialchars($shortDesc)) ?><?php if ($needReadMore) echo '...'; ?></span>
                            <?php if ($needReadMore): ?>
                                <span class="description-full" id="full-<?= $row['id'] ?>"><?= nl2br(htmlspecialchars($fullDesc)) ?></span>
                                <button class="btn-readmore" onclick="toggleDescription(<?= $row['id'] ?>)" id="btn-<?= $row['id'] ?>">Lire plus</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                $numero++;
            }
        } else {
            echo "<p class='text-danger text-center'>Aucun service trouvé.</p>";
        }
        ?>
    </div>
</div>

<?php include 'include/footer.php'; ?>

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

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
    <i class="fa fa-angle-double-up"></i>
</a>

</body>
</html>
