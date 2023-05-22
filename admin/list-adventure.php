<?php 
include "../includes/header.php"; 
if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin") {
    header('Location: ../index.php');
    exit();
}
else {
$stmt = $conn->prepare("SELECT * FROM adventure");
$stmt->execute();
$adventures = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

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
                <h1><?php echo $_SESSION["login"]; ?> - List Adventure</h1>
                <a href="admin-menu.php">Menu administration</a>
                <hr>
                <br>
            </div>
            <div>
                <h2>Here are you options :</h2>
                <table class="table">
    <thead>
        <tr>
            <th>Heading</th>
            <th>Date</th>
            <th>Duration</th>
            <th>Sumary</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adventures as $adventure) { ?>
            <tr>
                <td><?php echo $adventure['heading']; ?></td>
                <td><?php echo $adventure['tripDate']; ?></td>
                <td><?php echo $adventure['duration']; ?></td>
                <td><?php echo $adventure['summary']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


               
            
                
            </div>
        </div>
        
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>