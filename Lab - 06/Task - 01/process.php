<?php
if(isset($_POST['submit'])){
    $names = explode(",", $_POST['names']);
    $reversedNames = array_reverse($names);
    
    echo "Original Names: " . implode(", ", $names) . "<br>";
    echo "Reversed Names: " . implode(", ", $reversedNames);
}
?>
