<?php include "../includes/header.php";
// Récupération de valeur titre, nom, prénoms, et rôle  par méthode post
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = ($_POST["login"]);
    $password = ($_POST["password"]);
} else {
    header('Location: ../index.php');
    exit();
}
// En fonction du lien on génère les liens appropriés
if ($login == 'admin' && $password == 'admin') {
    $_SESSION["login"] = "Admin";
    $addAdventure = "<a href='../admin/admin-add.php'>Add adventure</a>";
    $listAdventure = "<a href='../admin/list-adventure.php'>List adventure</a>";
    $delAdventure = "<a href='../admin/delete-adventure.php'>Delete adventure</a>";
    $updateAdventure = "<a href='../admin/update-adventure.php'>Update adventure</a>";
    $viewAllAdventures = "<a href='../adventure/all-adventures.php'>View All Adventures</a>";
}
else {
    header('Location: ../index.php');
    exit();
    
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
                <h1>Welcome <?php echo $_SESSION["login"]; ?> : </h1>
                <a href="#">Menu administration</a>
                <hr>
                <br>
            </div>
            <div>
                <h2>Here are you options :</h2>
                <?php echo $addAdventure;  ?><br/>
                <?php echo $listAdventure;  ?><br/>
                <?php echo $delAdventure;  ?><br/>
                <?php echo $updateAdventure;  ?><br/>
                <?php echo $viewAllAdventures;  ?><br/>
               
                
            </div>
        </div>
        
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>