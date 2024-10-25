<?php
// List of names
$names = [
    "Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege",
    "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda",
    "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni",
    "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky"
];

// Get the query from the URL
$query = isset($_GET['q']) ? $_GET['q'] : '';

// Filter names based on the query
$results = array_filter($names, function($name) use ($query) {
    return stripos($name, $query) !== false;
});

// Return results as JSON
header('Content-Type: application/json');
echo json_encode(array_values($results));
?>
