// Javascript that takes JSON data from surfboards.php and appends information to inventory.html
/*
 * notice how we access the JSON data: "data.Products[row].Product.id"
 * "data" - The name of the variable we defined in line 12 of this file
 * "Products" - This is the name we set in our JSON file (defined on line 24 of products.php)
 * "row" - The name of the variable for which row we are looping through (defined on line 14 of this file)
 * "Product" - This is the name we set in our JSON file (defined on line 18 of products.php)
 * "id" - This is the individual property we want to access. You'll see this in the JSON file, but it also matches the name of the column in your database.
 */

//gets the JSON from our equipment.php
  $.getJSON("surfboards.php", function (data) {
      //loop through each surfboard in the JSON file and append a <div> with the surfboard information
      $.each(data.Surfboards, function (row) {
          $("#board_table").append('<div class="surfboard"><a href="equipment.php?id=' + data.Surfboards[row].Surfboard.id + '"><img src="images/' + data.Surfboards[row].Surfboards.imageName + '" alt="' + data.Surfboards[row].Surfboard.imageName + '"><p>' + data.Surfboards[row].Surfboards.name + '</p><p>$' + data.Surfboards[row].Surfboards.price + '</p></a></div>');

      });
  });