<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // For example, save the location to a file (you can replace this with a database insert)
    $file = 'locations.txt';
    $current = file_get_contents($file);
    $current .= "Latitude: $latitude, Longitude: $longitude\n";
    file_put_contents($file, $current);

    echo "Location saved.";
}
?>
