<!DOCTYPE html>
<html>
<head>
    <title>Password Validation Result</title>
</head>
<body>
    <?php
    // Include the validation function
    function validate_password($pass) {
        if (strlen($pass) < 8 || strlen($pass) > 32) {
            return "Password must be between 8 and 32 characters.";
        }

        if (!preg_match('/[A-Z]/', $pass)) {
            return "Password must contain at least one uppercase letter.";
        }

        if (!preg_match('/[a-z]/', $pass)) {
            return "Password must contain at least one lowercase letter.";
        }

        if (!preg_match('/[0-9]/', $pass)) {
            return "Password must contain at least one numeric character.";
        }

        if (preg_match('/[^A-Za-z0-9]/', $pass)) {
            return "Password cannot contain special characters.";
        }

        return "Password is valid.";
    }

    if (isset($_POST['submit'])) {
        // Get the password input from the form
        $password = $_POST['password'];
        
        // Validate the password
        $validation_result = validate_password($password);
        
        // Display the result
        echo $validation_result;
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
