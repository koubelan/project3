<?php 
include "../includes/header.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin") {
    header('Location: ../index.php');
    exit();
}


// Récupération des données du formulaire
$title = $_POST['title'];
$date = $_POST['date'];
$duration = $_POST['duration'];
$summary = $_POST['summary'];

// Conversion de la date au format anglais (jj/mm/aaaa) en format MySQL (aaaa-mm-jj)
$date = date("Y-m-d", strtotime($date));

// Requête SQL préparée pour insérer les données dans la table
$stmt = $conn->prepare("INSERT INTO adventure (heading, tripDate, duration, summary) VALUES (:title, :date, :duration, :summary)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':duration', $duration);
$stmt->bindParam(':summary', $summary);

// Exécution de la requête préparée
$stmt->execute();

$reponse = "Data has added successfully to DB.";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <title>Page <?php echo $_SESSION["login"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
    <?php echo $menu; ?>
    <main>
        
        <div class="corps">
            <div class="logout"><a href="../common/logout.php">Log out</a></div>
            <div class="upcoming">
                <h1><?php echo $_SESSION["login"]; ?> - Confirm</h1>
                <a href="admin-menu.php">Menu administration</a>
                <hr>
                <br>
            </div>
            <div>
                <h2>Here are you options :</h2>
                <?php echo $reponse ; ?>

                <h4><a href="../adventure/all-adventures.php">View all adventures</a></h4>
            
                
            </div>
        </div>
        
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>