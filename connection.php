<?php

// //Create the database connection
$conn = mysqli_connect('localhost', 'Arohanui2018', 'Kaden2018!') or die('Error connecting to MySql!');

// //Select the database, specifying the connection to use
mysqli_select_db('nalu_live_thesis');

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);

// ?>