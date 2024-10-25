<!DOCTYPE html>
<html>
<head>
    <title>String Split and Reverse</title>
</head>
<body>
    <form method="post">
        Enter a message: <input type="text" name="message">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Get the message from the form
        $message = $_POST['message'];
        
        // Split the message into words
        $words = explode(" ", $message);
        
        // Reverse the words
        $reversedWords = array_reverse($words);
        
        // Print original words
        echo "Original Words: " . implode(" ", $words) . "<br>";
        
        // Print reversed words
        echo "Reversed Words: " . implode(" ", $reversedWords);
    }
    ?>
</body>
</html>
