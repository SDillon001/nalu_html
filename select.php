<?php
include("connection.php");  
 if(isset($_POST["surfboard_id"]))
 {  
      $output = '';  
      $query = "SELECT * FROM Surfboards WHERE id = '".$_POST["surfboard_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {
        echo "<h2>".$row['boardName']."</h2>";
        echo "<img src=".'images/'.$row['imageName']." />";
      }
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>