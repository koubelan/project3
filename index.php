<?php include "includes/header.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
  <title>Home Page</title>
</head>
<!-- Corps de la page -->
<body>
  <!-- Insertion du menu inclus dans la page header.php -->
  <?php echo $menu; ?>
  <main>
    
    <div class="corps">
      <div class="logout"><a href="common/logout.php">Log out</a></div>
      <div class="formulaire">
      <h2>Welcome To Administration page (Login : admin / Password : admin)</h2>
      <form method="post" action="/admin/admin-connect.php">
      <div class="row">
          <div class="input-group mb-3 input-group">
            
            <div class="col-4">
            <input type="text" name="login" class="form-control" placeholder="Login" required col-4>
            </div>
            <div class="col-4">
            <input type="password" name="password" class="form-control" placeholder="Password" required col-4>
            </div>
            
            <div class="col-4">
            <input name="soumettre" class="btn btn-primary" type="submit" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!--Insertion Pied de page-->
  <?php include "includes/footer.php" ?>
</body>
</html>