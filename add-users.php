<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
//     include 'config.php';

  
//     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lname = mysqli_real_escape_string($conn, $_POST['email']);
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $password = mysqli_real_escape_string($conn, md5($_POST['password'])); 
//     $role = mysqli_real_escape_string($conn, $_POST['role']);
//     $country = mysqli_real_escape_string($conn, $_POST['country']);
//     $state = mysqli_real_escape_string($conn, $_POST['state']);
//     $city = mysqli_real_escape_string($conn, $_POST['city']);


//     $check_email_query = "SELECT * FROM user WHERE email = '$lname'";
//     $result = mysqli_query($conn, $check_email_query);
//     if(mysqli_num_rows($result) > 0) {
//         echo "email already exists"; // Return this string if email already exists
//     } else {


   
//         $sql = "INSERT INTO user (fname, email, username, password, role, country, state, city) 
//                 VALUES ('$fname', '$lname', '$username', '$password', '$role','$country','$state','$city')";

      
//         if (mysqli_query($conn, $sql)) {
//             // No need to return anything if the insertion is successful
//         } else {
//             echo "error"; // Return this string if there's an error
//         }

//         mysqli_close($conn);

//     }
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    include 'config.php';

  
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password'])); 
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);


    $check_email_query = "SELECT * FROM user WHERE email = '$lname'";
    $result = mysqli_query($conn, $check_email_query);
    if(mysqli_num_rows($result) > 0) {
        echo 'email_already_exists'; 
    } else {


   
        $sql = "INSERT INTO user (fname, email, username, password, role, country, state, city) 
                VALUES ('$fname', '$lname', '$username', '$password', '$role','$country','$state','$city')";

      
        if (mysqli_query($conn, $sql)) {
            echo 'success'; 
        } else {
            echo "error"; 
        }

        mysqli_close($conn);

    }
}

// ?>
