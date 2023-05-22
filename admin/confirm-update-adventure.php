<?php 
include "../includes/header.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin") {
    header('Location: ../index.php');
    exit();
}

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID de l'aventure à mettre à jour est présent dans la requête POST
    if (isset($_POST['adventureId'])) {
        $adventureId = $_POST['adventureId'];

        // Récupérer les nouvelles données du formulaire (vous pouvez ajouter d'autres champs si nécessaire)
        $newTitle = $_POST['newTitle'];
        $newDate = $_POST['newDate'];
        $newDuration = $_POST['newDuration'];
        $newSummary = $_POST['newSummary'];

        // Requête SQL pour mettre à jour les données de l'aventure dans la base de données
        $stmt = $conn->prepare("UPDATE adventure SET heading = :newTitle, tripDate = :newDate, duration = :newDuration, summary = :newSummary WHERE id = :adventureId");
        $stmt->bindParam(':newTitle', $newTitle);
        $stmt->bindParam(':newDate', $newDate);
        $stmt->bindParam(':newDuration', $newDuration);
        $stmt->bindParam(':newSummary', $newSummary);
        $stmt->bindParam(':adventureId', $adventureId);
        $stmt->execute();

        // Rediriger vers la page des aventures après la mise à jour
        header("Location: update-adventure.php");
        exit();
    }
}
