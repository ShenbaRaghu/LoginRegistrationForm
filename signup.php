<?php
$user = 0;
$success = 0;
$match = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']); //md5 is used to encrypt the password or we can use hashing
        $cpassword = md5($_POST['cpassword']);

        //Data inserted in the database no matter if there is duplication(which is not right)

//         $sql = "insert into `data` (username, password) values('$username', '$password')";
//         $result = mysqli_query($con, $sql);
// //if the data is inserted successfully then echo
//         if ($result) {
//             echo "Data inserted successfully";
//         } else {
//             die(mysqli_error($con));
//         }

//To check the number of rows having same username
        $sql = "Select * from `data` where username = '$username'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            //echo $num;
            if ($num > 0) {
                // echo "user already exits";
                $user = 1;

            } else {
                if ($password === $cpassword) {
                    $sql = "insert into `data` (username, password) values('$username', '$password')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        //echo "Signup successful";
                        $success = 1;

                    }
                } else {

                    // die(mysqli_error($con));
                    //echo "Password did not match";
                    $match = 1;
                }
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
        <title>Signup Page</title>
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

if ($user) {
    echo "<div class='alert alert-danger' role='alert'>
            User already exists
          </div>";
} else {
    if ($success) {
        echo "<div class='alert alert-success' role='alert'>
        Sign up Successful
      </div>";
    } else {
        if ($match) {
            echo "<div class='alert alert-danger' role='alert'>
            Password didnot match
          </div>";

        }
    }
}

?>



    </body>
</html>
