<?php 
include "../includes/header.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin") {
    header('Location: ../index.php');
    exit();
}

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID de l'aventure à supprimer est présent dans la requête POST
    if (isset($_POST['adventureId'])) {
        $adventureId = $_POST['adventureId'];

        // Requête SQL pour supprimer l'aventure correspondante dans la base de données
        $stmt = $conn->prepare("DELETE FROM adventure WHERE id = :adventureId");
        $stmt->bindParam(':adventureId', $adventureId);
        $stmt->execute();

        // Rediriger vers la page des aventures après la suppression
        header("Location: delete-adventure.php");
        exit();
    }
}
