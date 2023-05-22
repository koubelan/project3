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
                <h1><?php echo $_SESSION["login"]; ?> - Update Adventure</h1>
                <a href="admin-menu.php">Menu administration</a>
                <hr>
                <br>
            </div>
            <div>
        
                
        <?php foreach ($adventures as $adventure) { ?>
            <form action="confirm-update-adventure.php" method="POST">
    <input type="hidden" name="adventureId" value="<?php echo $adventure['id']; ?>">
    <div class="form-group">
        <label for="newTitle">New Heading :</label>
        <input type="text" class="form-control" id="newTitle" name="newTitle" value="<?php echo $adventure['heading']; ?>" required>
    </div>
    <div class="form-group">
        <label for="newDate">New Date :</label>
        <input type="date" class="form-control" id="newDate" name="newDate" value="<?php echo $adventure['tripDate']; ?>" required>
    </div>
    <div class="form-group">
        <label for="newDuration">New Duration :</label>
        <input type="number" class="form-control" id="newDuration" name="newDuration" min="1" max="999" value="<?php echo $adventure['duration']; ?>" required>
    </div>
    <div class="form-group">
        <label for="newSummary">New Summary :</label>
        <textarea class="form-control" id="newSummary" name="newSummary" rows="4" required><?php echo $adventure['summary']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>

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