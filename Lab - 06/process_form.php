<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Username validation
    $username = trim($_POST['username']);
    if (empty($username) || preg_match('/[^a-zA-Z0-9]/', $username)) {
        $errors['username'] = "Username cannot contain empty spaces or special characters";
    }

    // Password validation
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password !== $confirmPassword) {
        $errors['password'] = "Passwords do not match";
    }

    // Email validation
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address";
    }

    // Mobile number validation
    $mobile = $_POST['mobile'];
    if (!preg_match('/^\+?[0-9]+$/', $mobile)) {
        $errors['mobile'] = "Mobile number can contain numbers and '+' only";
    }

    // Zip code validation
    $zip = $_POST['zip'];
    if (!is_numeric($zip)) {
        $errors['zip'] = "Zip code must be a number";
    }

    // Check if there are errors
    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            echo "<p>Error in $key: $error</p>";
        }
    } else {
        // Process the form (e.g., save to the database)
        echo "Form submitted successfully!";
    }
}
?>
