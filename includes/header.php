<?php
// Start the session
session_start();


// Informations de connexion à la base de données
$servername = "localhost";
$username = "id20605654_koubelan";
$password = "Skills@2023@";
$dbname = "id20605654_adventure";

try {
    // Création d'une nouvelle instance de connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configuration des options PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  $reponse = "Erreur de connexion à la base de données : " . $e->getMessage();
}


$menu ="<div class='container-fluid'>
<div class='row'>
  <div class='col-4 hamburger'>
    <img id='hamburger' src='https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png' width='50px' height='50px'>  
    <!--Affichage du menu -->
    <nav class='menu'>
      <ul>
        <li>Home</li>
        <li>Book Trip</li>
        <li>Admin Login</li>
      </ul>
    </nav>
  </div>
  <div class='col-4 titre_bar'>
    Halifax Come and Kayak
  </div>
  <div class='col-4 paddle'>
    <img  src='https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png' width='50px' height='50px'>  
  </div>
</div>
</div>
";
?>
