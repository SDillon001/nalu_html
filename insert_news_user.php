<?php

//check if the form has been submitted
if (!empty($_POST["email"])) {
}

error_reporting(E_ALL); ini_set('display_errors', 1);

include 'news_connection.php'; //This include is where the connection is created

//Get the values from the URl
$Fname = $_POST['Fname'];
$email = $_POST['email'];

//Build the SQL statement
$sql = "INSERT INTO news_data (Fname, email) values('$Fname', '$email')";

//Execute the Query
if (!mysqli_query($conn, $sql)) 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
      echo "Inserted Successfully";
}

//Close the connection
mysqli_close($conn);

header('Location: index.php#news_signup');

?>