<?php
$link = mysqli_connect("23.229.153.68", "Arohanui2018", "Kaden2018!", "nalu_live_thesis");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>


<?php ini_set('display_errors', 1); error_reporting('E_ALL');?>