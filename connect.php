<?php
$con = mysqli_connect('localhost', 'root', '', 'registrationform');

// if ($con) {
//     echo "Connection Successful";
// } else {
//     die(mysqli_error($con));
// }

if (!$con) {
    die(mysqli_connect_error($con));
}
