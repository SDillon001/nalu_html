<?php
//Create the connection and select database
include 'connection.php';

//Select all data from the surfboards table
$sql = "SELECT * FROM Surfboards ORDER BY id ASC";

//Execute Query
$result = mysql_query($sql, $conn);

//Did the query fail?
if(!$result) die("Query has failed!");

//Make result into PHP array
$Surfboards = array();
if(mysqlli_num_rows($result)){
    while($Surfboard = mysql_fetch_assoc($result)){
        $Surfboards[] = array('Surfboard'=>$Surfboard);
    }
}

//Output data in JSON format
header('Content-type: application/json');
echo json_encode(array('Surfboards'=>$Surfboards));

//Close connection
mysql_close($conn);
?>