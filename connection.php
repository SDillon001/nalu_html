<?php

// //Create the database connection
$conn = mysqli_connect('localhost', 'Arohanui2018', 'Nalu2018!') or die('Error connecting to mysqli!');

// //Select the database, specifying the connection to use
mysqli_select_db($conn, 'nalu_live_thesis');

// ?>