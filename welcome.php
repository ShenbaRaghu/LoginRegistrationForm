<?php
include 'connect.php';
session_start();
//if my user name is not set and if the welcome.php page is directly accessed, it should rediect to index.php so only the below one is give
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    </head>
    <body>
<div class="container-fluid bg-light p-5">
<div class="jumbotron">
  <h1 class="display-4 text-center text-success">Hello, <?php echo $_SESSION['username'] ?></h1>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

    <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>

</div>

</div>

    </body>
</html>
