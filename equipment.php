<!doctype html>
<html>

<!--Include connection.php and head.php file -->
<?php 
include 'connection.php';
include("head.php");
?>

<title><?php echo $title ?>Equipment</title>

<body>
  <!--Included header.php file -->
  <?php include("header-include_v2.php");?>

  <div class="container">

    <!-- Start Content -->

    <div class="wrapper">
      <!-- Photo Page Title -->
      <div class="title-head box corner-shadow">
        <h1>Surfing Equipment</h1>
      </div>

      <!-- Image Carousel -->
      <div id="photo-carousel" class="carousel slide equipment" data-ride="carousel">
        <div class="photo carousel-inner">
          <div class="item photo active">
            <div class="item container equipment" id="hotspot_image">
              <img src="images/mini-eco-hybrid.png" alt="" usemap="#Map" />
              <map name="Map" id="Map">
                <area alt="" title="nose" href="#" shape="poly" coords="128,26,131,76,186,77,182,28" />
                <area alt="" title="stringer" href="#" shape="poly" coords="57,189,59,235,101,235,96,187" />
                <area alt="" title="specs" href="#" shape="poly" coords="93,473,97,530,135,528,137,473" />
                <area alt="" title="tail" href="#" shape="poly" coords="119,698,120,759,164,758,161,696" />
                <area alt="" title="fins" href="#" shape="poly" coords="789,640,792,696,836,699,833,636" />
                <area alt="" title="bottom" href="#" shape="poly" coords="862,489,863,546,901,547,897,492" />
                <area alt="" title="brand" href="#" shape="poly" coords="862,261,865,318,904,318,900,261" />
                <area alt="" title="rails" href="#" shape="poly" coords="857,184,862,230,899,229,898,187" />
              </map>
            </div>

            <div class="photo sub-item">
              <h3>Mini Eco Hybrid</h3>
              <p id="col">Introducing an eco-minded production surfboard.  In partnership with (the auto maker) MINI’s new Countryman Plug-In Hybrid,  the MINI Eco-Hybrid surfboard utilizes ECOBOARD Project qualified EPS blanks and epoxy resins, and is hand-built at CI’s factory in Santa Barbara that has been audited by Sustainable Surf to build Gold Level ECOBOARDS.</p>

              <p id="col">Designer: The MINI surfboard is a Channel Islands collaboration with Kalani Robb and MINI automotive.</p>

              <p id="col">More details: <a href="https://www.cisurfboards.com/board/mini/" target="_blank">Mini Eco Hybrid</a></p>
            </div>
          </div>

          <div class="item photo">
            <div class="item container equipment">
              <!-- <a href="#"> -->
                <img class="item-image" src="images/mctavish_involvement.jpg" /></a>
              </div>
              <div class="photo sub-item">
                <h3>Involvement - Mctavish Surfboards</h3>
                <p id="col">We developed the Involvement in 1966, a variation on our Noosa 66 model. It’s the extreme end of the "Pig" template where the tail measurement (12” up) is wider than the nose. Pigs were pioneered by Dale Velzy at Malibu in the late 50s, good trimmers and nose riders found the template more nimble off the tail, and far faster in trim, and nose-riding wasn’t really hurt at all, surprisingly. We considered the design a little extreme until Matty Chojnacki urged us to make him one a few years back. He absolutely ripped on it, with gliding drop-ins followed by a snappy bottom turn, fast nimble walking, in-the-slot trimming, tight nose-rides, and high kick stalls. A real thriller, the Involvement is the extreme end of the pivot-trim-noseride approach for small lined up waves today.</p>

                <p id="col">Designer: Bob McTavish</p>

                <p id="col">More details: <a href="https://www.mctavish.com.au/collections/involvements" target="_blank">Involvement - Mctavish Surfboards</a></p>
              </div>
            </div>

          </div>

          <a class="left equipment carousel-control" data-target="#photo-carousel" data-slide="prev">
            <span class="glyphicon equipment left"></span>
          </a>
          <a class="right equipment carousel-control" data-target="#photo-carousel" data-slide="next">
            <span class="glyphicon equipment right"></span>
          </a>
        </div>

        <!-- Surfboard Grid Start -->
        <div class="main-content equipment">
          <div class="equip-grid-head">
            <h1>Choose a Board to View</h1>
          </div>

          <div class="flexbox_container">
            <section id="board_table">
              <!-- surfboards.js will publish surfboards from database here -->
            </section>
          </div>

          <!-- Modal Code Start -->
          <div class="modal fade  " id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" id="modal">
                  
                </div>

                <div class="modal-body">
                  <!-- Indicators -->
                  <div class="carousel slide" data-interval="false" id="MyCarousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner timeline">

                      <!-- 1st Modal in Timeline -->
                      <div class="item active">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row" id="modal-db">
                          
                        </div>
                      </div>

                      <!-- 2nd Modal in Timeline -->
                      <div class="item">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row">
                          <div class="col-1">
                            <h1>Channel Islands, Mini Eco Hybrid</h1>
                            <img src="images/board_placehold_modal.png" id="img2" alt="" /></a>
                          </div>

                          <div class="col-2">
                            <div class="description"></div>
                            <p>Introducing an eco-minded production surfboard.  In partnership with (the auto maker) MINI’s new Countryman Plug-In Hybrid,  the MINI Eco-Hybrid surfboard utilizes ECOBOARD Project qualified EPS blanks and epoxy resins, and is hand-built at CI’s factory in Santa Barbara that has been audited by Sustainable Surf to build Gold Level ECOBOARDS.</p>
                          </div>
                        </div>
                      </div>

                      <!-- 3rd Modal in Timeline -->
                      <div class="item">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row">
                          <div class="col-1">
                            <h1>Channel Islands, Mini Eco Hybrid</h1>
                            <img src="images/board_placehold_modal.png" id="img2" alt="" /></a>
                          </div>

                          <div class="col-2">
                            <div class="description"></div>
                            <p>Introducing an eco-minded production surfboard.  In partnership with (the auto maker) MINI’s new Countryman Plug-In Hybrid,  the MINI Eco-Hybrid surfboard utilizes ECOBOARD Project qualified EPS blanks and epoxy resins, and is hand-built at CI’s factory in Santa Barbara that has been audited by Sustainable Surf to build Gold Level ECOBOARDS.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Controls -->
                    <a href="#MyCarousel" class="left carousel-control timeline" data-slide="prev"><span class="glyphicon left"></span></a>
                    <a href="#MyCarousel" class="right carousel-control timeline" data-slide="next"><span class="glyphicon right"></a>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--Included Header php file -->
        <?php include("footer-include.php");?>
      </body>
      </html>
