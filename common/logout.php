<?php
include "../includes/header.php";
session_unset();
// destruction des sessions
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
        <title>Page déconnexion</title>
</head>
<!-- Corps de la page -->
<body>
        <?php echo $menu; ?>
        <main>
                
                <div class="corps">
                <div class="upcoming">
                <h1>Hello, vous êtes déconnecté</h1>
                <hr>
                <br>
            </div>
                        <a href="../index.php">Page Accueil</a>
                </div>
        </main>
          <!--Insertion Pied de page-->
        <?php include "../includes/footer.php" ?>
</body>
</html>