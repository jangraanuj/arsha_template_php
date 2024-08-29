<?php 

?>

<?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
//     include 'config.php';

  
//     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lname = mysqli_real_escape_string($conn, $_POST['lname']);
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $password = mysqli_real_escape_string($conn, md5($_POST['password'])); 
//     $role = mysqli_real_escape_string($conn, $_POST['role']);

//    $sql1 = "INSERT INTO user (fname, lname, username, password,  role, city) 
//              VALUES ('$fname', '$lname', '$user', '$password', '$role', '$city')";
//     // $sql = "INSERT INTO user (fname, lname, username, password, role) 
//     //         VALUES ('$fname', '$lname', '$username', '$password', '$role')";

  
//     if (mysqli_query($conn, $sql)) {
        
//         echo "<h1>Data saved successfully</h1>";
        
//     } else {
        
//         echo "<p style='color: red; text-align: center; margin: 10px 0;'>Error: " . mysqli_error($conn) . "</p>";
//     }

   
//     mysqli_close($conn);

    
      
    
// }
?>
<script src="action.js"></script>
<?php


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
        echo "exists"; // Email already exists
    } else {


   
    $sql = "INSERT INTO user (fname, email, username, password, role, country, state, city) 
            VALUES ('$fname', '$lname', '$username', '$password', '$role','$country','$state','$city')";

  
    if (mysqli_query($conn, $sql)) {
        
        echo "<h1>Data saved successfully</h1>";
        
    } else {
        
        echo "<p style='color: red; text-align: center; margin: 10px 0;'>Error: " . mysqli_error($conn) . "</p>";
    }

   
    mysqli_close($conn);

    
      
    
}
}
?>




































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
// ?>
//         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
//         <script>
//             Swal.fire({
//                 icon: 'error',
//                 title: 'Oops...',
//                 text: 'Email already exists!',
//             });
//         </script>
// <?php
//     } else {


   
//     $sql = "INSERT INTO user (fname, email, username, password, role, country, state, city) 
//             VALUES ('$fname', '$lname', '$username', '$password', '$role','$country','$state','$city')";

  
//     if (mysqli_query($conn, $sql)) {
        
//         echo "<h1>Data saved successfully</h1>";
        
//     } else {
        
//         echo "<p style='color: red; text-align: center; margin: 10px 0;'>Error: " . mysqli_error($conn) . "</p>";
//     }

   
//     mysqli_close($conn);

    
      
    
// }
// }
?>
<!-- <script src="action.js"></script> -->






   