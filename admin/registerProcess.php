<?php
require 'conn.php';

if (isset($_POST['submit'])) {

    $user  = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);

    $securepass = password_hash($pass, PASSWORD_BCRYPT);

    // Check if email already exists
    $sql1 = "SELECT email FROM users WHERE email = '$email'";
    $check2 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($check2) > 0) { 
        // Email already registered
        echo "<script>
                alert('Email already exists!');
                window.location = 'register.php';
              </script>";
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO users (full_name, email, password, status) 
            VALUES ('$user', '$email', '$securepass', 1)";

    $check = mysqli_query($conn, $sql);

    if ($check) {
        echo "<script>
                alert('Registration successful');
                window.location = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Registration failed');
                window.location = 'register.php';
              </script>";
    }
}
?>
