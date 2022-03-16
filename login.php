<?php
session_start();
$login = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "Select * from `data` where username='$username' and password='$password'";
        $result = mysqli_query($con, $sql);

        if ($result) {

            $num = mysqli_num_rows($result);

            if ($num > 0) {
                //echo "Login Successful";
                $login = 1;
                $_SESSION['username'] = $username;
                header('location:Welcome.php');
            } else {
                //echo "Invalid credentials";
                $invalid = 1;
            }
        }

    }
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    </head>
    <body>
        <?php
if ($login) {
    echo "<div class='alert alert-success' role='alert'>
            Login Successful
          </div>";
} else {
    if ($invalid) {
        echo "<div class='alert alert-danger' role='alert'>
        Invalid credentials
      </div>";
    }
}

?>
    </body>
</html>

