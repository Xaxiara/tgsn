<?php
include 'include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sécurisation des champs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification simple
    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Message envoyé avec succès. Merci de nous avoir contactés !'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Une erreur est survenue : " . $stmt->error . "'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Veuillez remplir tous les champs obligatoires.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
