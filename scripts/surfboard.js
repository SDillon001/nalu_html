// Javascript that takes JSON data from surfboards.php and appends information to equipment.php
/*
 * notice how we access the JSON data: "data.Surfboards[row].Product.id"
 * "data" - The name of the variable we defined in line 12 of this file
 * "Surfboards" - This is the name we set in our JSON file (defined on line 24 of Surfboards.php)
 * "row" - The name of the variable for which row we are looping through (defined on line 14 of this file)
 * "Surfboards" - This is the name we set in our JSON file (defined on line 18 of Surfboards.php)
 * "id" - This is the individual property we want to access. You'll see this in the JSON file, but it also matches the name of the column in your database.
 */

//gets the JSON from our surfboards.php
  $.getJSON("surfboards.php", function (data) {
      //loop through each surfboard in the JSON file and append a <div> with the surfboard information
      $.each(data.Surfboards, function (row) {
          $("#board_table").append(
            '<div class="photog-group clearfix"><figure class="cap-bot"><a href="equipment.php?id=' 
            + data.Surfboards[row].Surfboard.id 
            + '"><a href="#myModal" class="modalImg" data-toggle="modal"><img class="photog-headshot" src="images/'
            + data.Surfboards[row].Surfboard.imageName + '" alt="'
            + data.Surfboards[row].Surfboard.imageName
            // Here is:
            + '"></a><figcaption><p>Board Name: ' 
            + data.Surfboards[row].Surfboard.boardName 
            + '<br>Year Shaped: ' 
            + data.Surfboards[row].Surfboard.year + '</p></figcaption><figure></div>');
      });
  });

  //gets the JSON from our surfboards.php
  $.getJSON("surfboards.php", function (data) {
      //loop through each surfboard in the JSON file and append a <div> with the surfboard information
      $.each(data.Surfboards, function (row) {
          $("#modal-db").append(
            '<div class="row"><a href="equipment.php?id=' 
            + data.Surfboards[row].Surfboard.id
            + '<img src="images/'
            + data.Surfboards[row].Surfboard.imageName + '" alt="'
            + data.Surfboards[row].Surfboard.imageName
            // Here is:
            + '"></a><p>Board Name: ' 
            + data.Surfboards[row].Surfboard.boardName 
            + '<br>Year Shaped: ' 
            + data.Surfboards[row].Surfboard.year + '</p></div>');
      });
  });