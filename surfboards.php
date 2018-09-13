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
//Surfboards is this array ^
if(mysqli_num_rows($result)){
    while($Surfboard = mysqli_fetch_assoc($result)){
        //Same thing here you wrap the data fetched from the database aka the 'row'
        //And put it inside another array reflected as
        //Surfboards : [ { Surfboard: { Data } } ]
        $Surfboards[] = array('Surfboard'=>$Surfboard);
    }
}

//Output data in JSON format
header('Content-type: application/json');
//However here as you see you wrap an array inside another array but with the name 'Surfboards'
echo json_encode(array('Surfboards'=>$Surfboards));

//Close connection
mysqli_close($conn);
?>