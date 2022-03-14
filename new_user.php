<?php
include("connection.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";

try {
    if (mysqli_query($conn, $sql))
        echo "Sign Up successfully, You can login now...";
} catch (Exception $err) {
    echo "User $email is already registered.";
}

?>