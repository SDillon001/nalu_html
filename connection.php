<?php

// //Create the database connection
$conn = mysqli_connect('localhost', 'Arohanui2018', 'Kaden2018!') or die('Error connecting to mysqli!');

// //Select the database, specifying the connection to use
mysqli_select_db($conn, 'nalu_live_thesis');

if (!$conn) {
    echo "Error: Unable to connect to mysqli." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// ?>