<!DOCTYPE html>
<html>
<head>
    <title>Form Validation Result</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $errors = [];

        // Validate User Name: No spaces or special characters allowed
        if (!preg_match('/^[A-Za-z0-9]+$/', $_POST['username'])) {
            $errors[] = "Username cannot contain spaces or special characters.";
        }

        // Validate Password and Repeat Password match
        if ($_POST['password'] !== $_POST['repeat_password']) {
            $errors[] = "Passwords do not match.";
        }

        // Validate Email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email address.";
        }

        // Validate Mobile Number: Contains numbers and '+' only
        if (!preg_match('/^\+?[0-9]+$/', $_POST['mobile'])) {
            $errors[] = "Mobile number can only contain numbers and '+'.";
        }

        // Validate Zip Code: Must be a number
        if (!preg_match('/^[0-9]+$/', $_POST['zipcode'])) {
            $errors[] = "Zip code must be a number.";
        }

        // Validate Comment (optional): No special validation needed
        $comment = $_POST['comment'];

        // Validate Gender: Must be one of the provided options
        if (!in_array($_POST['gender'], ['male', 'female', 'other'])) {
            $errors[] = "Please select a valid gender.";
        }

        // Display Errors or Success Message
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        } else {
            echo "<p style='color:green;'>Form submitted successfully!</p>";
            // Process form data (e.g., save to database)
        }
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
