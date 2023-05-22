<?php 
include "../includes/header.php"; 
$stmt = $conn->prepare("SELECT * FROM adventure");
$stmt->execute();
$adventures = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/adventures.css" type="text/css" />
    <title>All adventures</title>
  </head>
  <!-- Corps de la page -->
  <body>
    <div class="container" >
      <div class="hamburger">
        <img id="hamburger" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" width="50px" height="50px">  
        
        <!--Affichage du menu -->
        <nav class="menu">
          <ul>
            <li>Home</li>
            <li>Book Trip</li>
            <li>Admin Login</li>
          </ul>
       </nav>
      </div>
      <div class="titre_bar">Halifax Come and Kayak</div>
     <div class="paddle">
      <img  src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" width="50px" height="50px">  
     </div>
     
    </div>
      
    <main>

         <!--Insertion d'image slide-->
        <div class="slide">
            <img  src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg">
            <div class="expirence">
              Come Expirence <br/>Canada
            </div>
        </div>

        <!--Insertion d'article texte -->
        <article >
        <div class="upcoming">Upcoming Adventures<hr></div>
        <div class="lieu">
        <?php
        foreach ($adventures as $adventure) {
        // Affichage des données de l'aventure
        echo "<h2>" . $adventure['heading'] . "</h2>";
        echo "<span>Date : " . $adventure['tripDate'] . "<br/>Duration: " . $adventure['duration'] . " days</span>";
        echo "<h3>Summary</h3>";
         echo "<p>" . $adventure['summary'] . "</p>";
    
}

        
        ?>
          
        </div>
      </article>
    </main>
     <!--Appelle de la librairie Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="../assets/css/script.js"></script>
  </body>
</html>
