<?php
//Create the connection and select database
include 'connection.php';

//Select all data from the surfboards table
$sql = "SELECT * FROM Surfboards ORDER BY id ASC";

//Execute Query
$result = mysqli_query($conn, $sql);

//Did the query fail?
if(!$result) die("Query has failed!");

//Make result into PHP array
$Surfboards = array();
if(mysqli_num_rows($result)){
    while($Surfboard = mysqli_fetch_assoc($result)){
        $Surfboards[] = array('Surfboard'=>$Surfboard);
    }
}

//Output data in JSON format
header('Content-type: application/json');
echo json_encode(array('Surfboards'=>$Surfboards));

//Close connection
mysqli_close($conn);
?>