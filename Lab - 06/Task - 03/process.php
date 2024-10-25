<!DOCTYPE html>
<html>
<head>
    <title>Number Frequency Result</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        // Get the input from the form
        $numbers = $_POST['numbers'];
        
        // Split the string into an array of numbers
        $numbersArray = explode(",", $numbers);
        
        // Trim any whitespace around the numbers
        $numbersArray = array_map('trim', $numbersArray);
        
        // Count the frequency of each number
        $frequency = array_count_values($numbersArray);
        
        // Display the frequency of each number
        foreach ($frequency as $number => $count) {
            echo "$number occurred $count times<br>";
        }
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
