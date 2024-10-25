<!DOCTYPE html>
<html>
<head>
    <title>Power Calculation Result</title>
</head>
<body>
    <?php
    // Define the power function
    function power($number, $degree) {
        $result = 1;
        for ($i = 0; $i < $degree; $i++) {
            $result *= $number;
        }
        return $result;
    }

    if (isset($_POST['submit'])) {
        // Get the input values from the form
        $number = $_POST['number'];
        $degree = $_POST['degree'];
        
        // Validate input
        if (is_numeric($number) && is_numeric($degree)) {
            // Calculate the power
            $result = power($number, $degree);
            
            // Display the result
            echo "$number raised to the power of $degree is $result.";
        } else {
            echo "Please enter valid numeric values.";
        }
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
