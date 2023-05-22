<?php 
include "../includes/header.php"; 
if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin") {
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
    <title>Add Adventure - <?php echo $_SESSION["login"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
    <?php echo $menu; ?>
    <main>
       
        <div class="corps">
            <div class="logout"><a href="../common/logout.php">Log out</a></div>
            <div class="upcoming">
                <h1><?php echo $_SESSION["login"]; ?> - Add Adventure</h1>
                <a href="admin-menu.php">Menu administration</a>
                <hr>
                <br>
            </div>
            
                
                
         <h5>Input details about the trip</h5>      
        <form action="admin-confirm.php" method="POST">
            
    <div class="form-group row">
    <label for="title" class="col-sm-1 col-form-label">Heading :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
</div>
<div class="form-group row">
    <label for="date" class="col-sm-1 col-form-label">Trip Date :</label>
    <div class="col-sm-5">
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
</div>
<div class="form-group row">
    <label for="duration" class="col-sm-1 col-form-label">Duration :</label>
    <div class="col-sm-5">
        <input type="number" class="form-control" id="duration" name="duration" min="1" max="999" required>
    </div>
</div>
<div class="form-group row">
    <label for="summary" class="col-sm-1 col-form-label">Summary :</label>
    <div class="col-sm-5">
        <textarea class="form-control" id="summary" name="summary" rows="4" required></textarea>
    </div>
</div>

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
                
            
        </div>
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>