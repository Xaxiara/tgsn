<?php
// Envoi du mail avec PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Chargement de Composer Autoload
require 'vendor/autoload.php';

include 'include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = intval($_POST['car_id']);
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'] ?? '';
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $status = 'en_attente';

    // Calcul de la durée et du total
    $stmt = $conn->prepare("SELECT price_per_day FROM cars WHERE id = ?");
    $stmt->execute([$car_id]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);
    $price_per_day = $car['price_per_day'];

    $datediff = (strtotime($date_fin) - strtotime($date_debut)) / (60 * 60 * 24);
    $total_price = $price_per_day * ($datediff + 1);

    // Insertion dans la base de données
    $stmt = $conn->prepare("INSERT INTO reservations (car_id, customer_name, customer_email, customer_phone, rental_start_date, rental_end_date, total_price, status, created_at) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");

    $success = $stmt->execute([$car_id, $nom, $email, $phone, $date_debut, $date_fin, $total_price, $status]);

    //Test d'envoie de mail
    if ($success) {

        $mail = new PHPMailer(true); // Classe appelée

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io'; // ou smtp.gmail.com
            $mail->SMTPAuth = true;
            $mail->Username = '214c7dddcb8de6';
            $mail->Password = '3bd6ac84c183c2';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('maxime.loko5@gmail.com', 'TGSN');
            $mail->addAddress($email, $nom);

            $mail->isHTML(true);
            $mail->Subject = 'Confirmation de réservation - TGSN';
            $mail->Body = "
                <p>Bonjour <strong>$nom</strong>,</p>
                <p>Votre réservation a été reçue avec succès.</p>
                <p><strong>Détails :</strong></p>
                <ul>
                    <li>Véhicule ID : $car_id</li>
                    <li>Du : $date_debut</li>
                    <li>Au : $date_fin</li>
                    <li>Total : $total_price €</li>
                </ul>
                <p>Nous vous contacterons bientôt pour la suite.</p>
            ";

            $mail->send();
            echo "Réservation enregistrée et e-mail envoyé avec succès.
                Nos services vous contacterons pour la confirmation de votre réservation.";
        } catch (Exception $e) {
            echo "Réservation enregistrée, mais l'e-mail n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
        }
    } else {
        echo "Erreur lors de l'enregistrement de la réservation.";
    }

    $stmt = null;
    $conn = null;
} else {
    echo "Accès non autorisé.";
}
?>
