<?php
include("connection.php"); 
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql); 

if ($result) {
    $check = mysqli_num_rows($result);
    if($check > 0){
        while($data= mysqli_fetch_assoc($result)){
            /* Print all of your data*/
            echo "Login Successfull.";
        }
    } else{
        echo "Incorrect Username or Password.";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
