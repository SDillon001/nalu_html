// Javascript that takes JSON data from surfboards.php and appends information to equipment.php
/*
 * notice how we access the JSON data: "data.Surfboards[row].Product.id"
 * "data" - The name of the variable we defined in line 12 of this file
 * "Surfboards" - This is the name we set in our JSON file (defined on line 24 of Surfboards.php)
 * "row" - The name of the variable for which row we are looping through (defined on line 14 of this file)
 * "Surfboards" - This is the name we set in our JSON file (defined on line 18 of Surfboards.php)
 * "id" - This is the individual property we want to access. You'll see this in the JSON file, but it also matches the name of the column in your database.
 */

// Function that responds to 'View' button onclick on equipment.php and inserts information from database into modal id="dataModal" 
$(document).ready(function(){
  $('#surfboardModal').on('show.bs.modal', function (event) {
    var board = $(event.relatedTarget).closest(".photog-group");
    // If necessary, you could initiate an AJAX request here ask another [*.php] like /board-info.php?id=1 and return this data

    //Here I get all the data from the .photog-group that was clicked
    var title = board.data('title'); //Get the 'data-title' attribute
    var imageSrc = board.data('image'); //Get the 'data-image' attribute
    var description = board.data('description'); //Get the 'data-description' attribute
    //var something = board.data('something') //Get the 'data-something' attribute

    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(title);
    modal.find('.modal-body .modal-description').text(description);
    modal.find('.modal-body .modal-image').attr("src", imageSrc);
  });

  //// From Dylan W. on Discord - Replace in the surfboard.js
  $.getJSON("surfboards.php", function (data) {
    //loop through each surfboard in the JSON file and append a <div> with the surfboard information
    $.each(data.Surfboards, function (row) {
        $("#board_table").append(
          '<div class="equip-content">' + '<div class="photog-group custom-modal clearfix" data-title="'+ data.Surfboards[row].Surfboard.boardName +'" data-image="images/'
          + data.Surfboards[row].Surfboard.imageName +'" data-description="'+
          data.Surfboards[row].Surfboard.caDescription +'"><figure><a href="equipment.php?id=' 
          + data.Surfboards[row].Surfboard.id 
          + '"><a data-target="#surfboardModal" data-toggle="modal"><div class="equip-content-overlay"></div><img class="photog-headshot" src="images/'
          + data.Surfboards[row].Surfboard.imageName + '" alt="'
          + data.Surfboards[row].Surfboard.imageName
          + '"></a><figcaption class="fadeIn-bottom"><h1>' 
          + data.Surfboards[row].Surfboard.boardName + '</h1>'
          + '<hr>'
          + '<p>Year Shaped: ' 
          + data.Surfboards[row].Surfboard.year + '</p></figcaption><figure></div>');
    });
  });
});