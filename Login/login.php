<?php
include('../config.php'); // Ensure the path is correct

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $con->prepare("SELECT pass FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    
    if ($stmt->execute()) {
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($pass);
            $stmt->fetch();
            // echo "Provided password: " . $password . "<br>";
            // echo "Hashed password: " . $pass . "<br>";


            // Verify the password
            // if (password_verify($password, $pass)) {
            //     echo "Password is correct.";
            // } else {
            //     echo "Password is incorrect.";
            // }
            
            if (password_verify($password, $pass)) {
                // Password is correct, start a session and redirect to a protected page
                session_start();
                $_SESSION['email'] = $email;
                header("Location: protected_page.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email address.";
        }
    } else {
        echo "Error executing the statement.";
    }
}

$con->close();
?>