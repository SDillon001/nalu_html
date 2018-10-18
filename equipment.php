<?php  
include("connection.php"); 
$query = "SELECT * FROM Surfboards";  
$result = mysqli_query($conn, $query);  
?> 

<!DOCTYPE html> 
<html>

<!--Include and head.php file -->
<?php 
include("head.php");
?>

<title><?php echo $title ?>Equipment</title>

<body>
  <!--Included header.php file -->
  <?php include("header-include_v2.php");?>

  <div class="container">

    <!-- Photo Page Title 
      <div class="title-head box corner-shadow">
        <h1>Surfing Equipment</h1>
      </div>
    -->

    <!-- Section 1 -->
    <div id="main-carousel" class="carousel slide" data-ride="carousel" data-interval="35000">
      <div class="carousel-inner">
        <div class="videoWrapper item active" id="video">
          <video id="video" muted autoplay="autoplay" preload="auto">
            <source src="images/equipment/board_animation.mp4"></source>
          </video>
          <div class="carousel-caption">
            <!-- <h1 class="caption-title">A <span style="font-family: 'Raleway-SemiBold'; color: #FCEFC5;">SURFING</span><span> COLLECTIVE<span class='spacer'></span><br /><h6 class="caption-sub-title">Explore the History of Surfing</h6></span><span class='spacer'></span><br /><a class="btn caption" href="timeline.php">LEARN MORE</a></h1> -->
          </div>
        </div>
        <!-- carousel image 2 -->
        <div class="item">
          <a href="#"><img src="images/equipment/banners/142_tom_blake_hollow_surfboard_2.jpg" alt="duke_waikiki_1930"/></a>
        </div>
        <!-- carousel image 3 -->
        <div class="item">
          <a href="#"><img src="images/equipment/banners/142_tom_blake_hollow_surfboard_2.jpg" alt="duke_waikiki_1930"/></a>
        </div>
        <!-- carousel image 4 -->
        <div class="item">
          <a href="#"><img src="images/equipment/banners/145_tom_blake_la_ladder_co.jpg" alt="145_tom_blake_la_ladder_co.jpg" /></a>
        </div>
        <!-- carousel image 5 -->
        <div class="item">
          <a href="#"><img src="images/equipment/banners/146_tom_blake_paddleboard_1.jpg" alt="145_tom_blake_la_ladder_co.jpg" /></a>
        </div> 
      </div>

      <a class="left carousel-control" data-target="#main-carousel" data-slide="prev">
        <span class="glyphicon left"></span>
      </a>
      <a class="right carousel-control" data-target="#main-carousel" data-slide="next">
        <span class="glyphicon right"></span>
      </a>
    </div>

    <!-- Start Content -->
    <div class="main-content">
      <div class="equip-grid-head">
        <h1>Surfboards Then and Now</h1>
        <h2>~ click below for more info ~</h2>
      </div>
    </div>

    <!-- Longboard Flip -->
    <div class="split-content-wrapper">
      <div class="eq-split-content left">
        <div class="card-container">
          <div class="card">
            <div class="item container equipment" id="hotspot_image">
              <div class="side">
                <img src="images/equipment/boards/346_redwood_hotcurl_1937.jpg" alt=""/>
              </div>
              <div class="side back">
                <img src="images/equipment/boards/346_redwood_hotcurl_1937_back.jpg" alt="" usemap="#Map" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="eq-split-content right">
        <h2>Hot Curl plank, 10’ 2.75”, 56 lbs</h2>
        <h3>Circa 1940s, Hawaiian Origin, Unknown shaper, Redwood with a Koa Wood Tailblock</h3>
        <p id="col">The “Hot Curl” was a board shape created in 1937 on Oahu by Honolulu surfer John Kelly. A finless predecessor to the big wave gun, it represents the first customized surfboard constructed exclusively for riding larger surf. Reshaped from “plank” surfboards, these boards had narrow vee-bottom tails that held in larger, more critical surf conditions. So named for keeping the rider in the hot part of the curl. “John Kelly, Wally Froiseth, Fran Heath and later, Woody Brown and George Downing, were among a small group who all but invented big-wave surfing at Makaha in the 1940s and early ‘50s while riding “Hot Curls.”</p>
      </div>
    </div>

    <!-- Shortboard Flip -->
    <div class="split-content-wrapper">
      <div class="eq-split-content-left two">
        <h2>Mini Eco Hybrid</h2>
        <p id="col">Introducing an eco-minded production surfboard.  In partnership with (the auto maker) MINI’s new Countryman Plug-In Hybrid,  the MINI Eco-Hybrid surfboard utilizes ECOBOARD Project qualified EPS blanks and epoxy resins, and is hand-built at CI’s factory in Santa Barbara that has been audited by Sustainable Surf to build Gold Level ECOBOARDS.</p>

        <p id="col">Designer: The MINI surfboard is a Channel Islands collaboration with Kalani Robb and MINI automotive.</p>

        <p id="col"><span style="font-weight: 600">More details:</span> <a href="https://www.cisurfboards.com/board/mini/" target="_blank">Mini Eco Hybrid</a></p>
      </div>

      <div class="eq-split-content-right two">
        <div class="card-container">
          <div class="card">
            <div class="item container equipment" id="hotspot_image">
              <div class="side">
                <img src="images/mini-eco-hybrid.png" alt=""/>
              </div>
              <div class="side back">
                <img src="images/equipment/boards/346_redwood_hotcurl_1937_back.jpg" alt="" usemap="#Map" />
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Surfboard Image Grid Start -->
  <div class="main-content equipment">
    <div class="equip-grid-head">
      <h1>Choose a Board to View</h1>
    </div>

    <div class="flexbox_container">
      <section class="view_data" id="board_table">
        <!-- surfboards.js will publish surfboards from database here -->
      </section>
    </div>

    <!-- Modal Start -->
    <div class="modal fade" id="surfboardModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false" tabindex="-1">
      <div class="modal-dialog equipment">  
        <div class="modal-content equipment">   
          <!-- Modal Header -->
          <div class="modal-header" id="modal">  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> 
            <h1 class="modal-title"></h1>
          </div>
          <div class="modal-body equipment">
            <!-- Modal Image -->
            <div class="modal-col one">
             <img class="modal-image equipment" />
           </div>
           <!-- Modal Description -->
           <div class="modal-col two">
             <div class="modal-description"></div>
           </div>
         </div>
         <!-- Modal Footer -->
         <div class="modal-footer">  
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
        </div>  
      </div>  
    </div>  
  </div> 

  <!--Included Header php file -->
  <?php include("footer-include.php");?>
</body>
</html>
