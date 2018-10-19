<!doctype html>
<html>

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Equipment</title>

<body>
  <!--Included Header php file -->
  <?php include("header-include_v2.php");?>

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
      <h3>Circa: 1940s, Hawaiian Origin, Unknown shaper, Redwood with a Koa Wood Tailblock</h3>
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
  <!-- Top Section ends Here -->

  <!-- Surfboard Image Grid Start -->
  <div class="main-content equipment">
    <div class="equip-grid-head">
      <h1>Choose a Board to View</h1>
    </div>

    <div class="flexbox_container">
      <div class="photogs">
        <!-- Image Grid Row 1 -->
        <div class="photog-group clearfix" data-slide="0">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1700_S.356_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Replica Olo</h1>
              <hr>
              <p class="content-text">Greg Noll Surfboard</p>
              <p class="content-text2">Circa: 1700</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="1">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1900_S.444_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Koa Alaia</h1>
              <hr>
              <p class="content-text">Greg &amp; Jed Noll Surfboard</p>
              <p class="content-text2">Circa: 1900</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="2">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1935_S.223_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Duke Kahanamoku's Board</h1>
              <hr>
              <p class="content-text">Pacific System Homes Surfboard</p>
              <p class="content-text2">Circa: 1935</p>
            </div>
          </div>
        </div>

        <!-- Image Grid Row 2 -->
        <div class="photog-group clearfix" data-slide="3">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1942_S.344_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Redwood and Balsa<br>Waikiki Surf-board model</h1>
              <hr>
              <p class="content-text">Pacific System Homes Surfboard</p>
              <p class="content-text2">Circa: 1942</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="4">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1950_S.6_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">12' Balsa Gun</h1>
              <hr>
              <p class="content-text">Pat Curren</p>
              <p class="content-text2">Circa: 1957</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="5">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1960_S.635_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Robin Leedy Hoyland’s <br>422 model</h1>
              <hr>
              <p class="content-text">Hap Jacobs</p>
              <p class="content-text2">Circa: 1965</p>
            </div>
          </div>
        </div>

        <!-- Image Grid Row 3 -->
        <div class="photog-group clearfix" data-slide="6">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1966_S.481_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Mickey Dora <br>Da Cat Model</h1>
              <hr>
              <p class="content-text">Greg Noll</p>
              <p class="content-text2">Circa: 1966</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="7">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1973_S.381_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Bonzer design</h1>
              <hr>
              <p class="content-text">Campbell Brothers</p>
              <p class="content-text2">Circa: 1973</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="8">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1981_S.435_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">Cheyne Horan <br>"Laser Zap" Model</h1>
              <hr>
              <p class="content-text">Geoff McCoy</p>
              <p class="content-text2">Circa: 1981</p>
            </div>
          </div>
        </div>

        <!-- Image Grid Row 4 -->
        <div class="photog-group clearfix" data-slide="9">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/1996_S.387_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">7'6 Rounded Pintail Gun <br>Tom Curren's board</h1>
              <hr>
              <p class="content-text">Hamish Graham</p>
              <p class="content-text2">Circa: 1996</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="10">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/2004_S.433_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">6'2" Squash Tail <br> Andy Irons' Board</h1>
              <hr>
              <p class="content-text">Hawaiian Island Creations</p>
              <p class="content-text2">Circa: 2004</p>
            </div>
          </div>
        </div>

        <div class="photog-group clearfix" data-slide="11">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="photog-headshot" src="images/2009_S.332_F.jpg" />
            <div class="content-details fadeIn-bottom">
              <h1 class="content-title">6'4" DHD<br>Fanning Pro Model</h1>
              <hr>
              <p class="content-text">Darren Handley</p>
              <p class="content-text2">Circa: 2009</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="interviews">
    <div class="int-title">
      <h2>Learn More Below</h2>
      <h1>SURFING EQUIPMENT VIDEOS</h1>
      <hr class="int-hr">
    </div>

    <div class="flex-container-interviews">
      <div class="flex-item2">
        <div class="video-container">
          <iframe width="430" height="240" src="https://www.youtube.com/embed/oH9V1pBdhGg" frameborder="0" allowfullscreen ></iframe> 
        </div>
        <h3><span style="font-weight: 600">BoardRoom - Legends of Surfboard Shaping:</span> Hobie Alter 1933 - 2014</h3>
        <p>An Excerpt from the Surf Documentary, "BoardRoom - Legends of Surfboard Shaping".</p>
        <a href="https://www.youtube.com/watch?v=oH9V1pBdhGg" target="_blank" class="home-lm-link">Watch on Youtube</a>
      </div>

      <div class="flex-item2">
        <div class="video-container">
          <iframe width="430" height="240" src="https://www.youtube.com/embed/zEnOHnhaCxc" frameborder="0" allowfullscreen ></iframe> 
        </div>
        <h3><span style="font-weight: 600">Surfline's:</span> Shapers' Roundtable</h3>
        <p>A conversation about surfboards, with Eric Arakawa, Matt Biolos, Darren Handley, Britt Merrick, and Rusty Preisendorfer. </p>

        <a href="https://www.youtube.com/embed/zEnOHnhaCxc" target="_blank" class="home-lm-link">Watch on Youtube</a>
      </div>

      <div class="flex-item2">

        <div class="video-container">
          <iframe width="430" height="240" src="https://www.youtube.com/embed/2b3RwNbg1R0" frameborder="0" allowfullscreen ></iframe>
        </div>
        <h3><span style="font-weight: 600">Tom Blake:</span> A Surfer's Philosophy</h3>
        <p>This film explores the thinking of Tom Blake, one of the great pioneers of surfing in the early and mid part of the 20th century.  </p>
        <a href="https://www.youtube.com/watch?v=2b3RwNbg1R0" target="_blank" class="home-lm-link">Watch on Youtube</a>
      </div>
    </div>

    <section class="end">
      <!--Included Header php file -->
      <?php include("footer-include.php");?>
    </section>

  </div>


</div> <!-- End Photogs -->
</div> <!-- Div after Photogs -->

<!-- Modal Code Start -->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <!-- Carousel -->
        <div class="carousel slide" data-interval="false" id="MyCarousel" data-ride="carousel">
          <div class="row">
            <nav aria-label="Page navigation example">
              <ul class="pagination mx-auto text-center">
                <li class="page-item disabled">
                  <a class="page-link previous" href="#MyCarousel" data-slide="prev" tabindex="-1">Previous</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Olo - 1700" data-slide-to="0" class="active"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Koa Alaia - 1900" data-slide-to="1"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Duke's Board - 1935" data-slide-to="2"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Waikiki Board - 1942" data-slide-to="3"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Balsa Gun - 1957" data-slide-to="4"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Hap Jacobs - 1965" data-slide-to="5"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Da Cat Model - 1966" data-slide-to="6"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Bonzer - 1973"data-slide-to="7"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Laser Zap Model - 1981" data-slide-to="8"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Hamish Graham Gun - 1996" data-slide-to="9"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="AI's Board - 2004" data-slide-to="10"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" data-target="#MyCarousel" data-toggle="tooltip" data-placement="bottom" title="Fanning's DHD - 2009" data-slide-to="11"><i class="fas fa-tint"></i></a>
                </li>
                <li class="page-item disabled">
                  <a class="page-link next" href="#MyCarousel" data-slide="next">Next</a>
                </li>
              </ul>
            </nav>
          </div>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <!-- 1st Modal in Photo Grid -->
            <div class="item active">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Replica Olo</span> | Greg Noll Surfboard</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1700_S.356_F.jpg" id="img1" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>16' ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>140lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>18.5 x 16ft x 5.25</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1700</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/356_518_olo_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 2nd Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Koa Alaia</span> | Greg &amp; Jed Noll</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1900_S.444_F.jpg" id="img1" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>9'6" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>50lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>18 x 114 x 2</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1900</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/444_A-117_alaia_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 3rd Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Duke Kahanamoku's Board</span> | Pacific System Homes Surfboards</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1935_S.223_F.jpg" id="img3" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>11'6" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>80lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>23.75 x 138 x 4.75</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1930's</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/223_PSH_Duke_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 4th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Waikiki Surf-board model</span> | Pacific System Homes Surfboard</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1942_S.344_F.jpg" id="img4" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>10'5" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>55lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>22.25 x 10ft x 3.25</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1942</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/344_Waikiki_Surf_Board_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 5th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                     <h1><span style="font-weight: 600">12' Balsa Gun</span> | Pat Curren</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1950_S.6_F.jpg" id="img5" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>12'1.25" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>33lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>23.75 x 138 x 4.75</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1957</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/6_Curren_big_gun_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 6th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Robin Leedy Hoyland’s - 422 model</span> | Hap Jacobs</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1960_S.635_F.jpg" id="img6" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>9'6" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>29lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>21.5 x 9.6ft x 3.5</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>mid-1960's</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/1960_S.635_F_Jacobs__Robin_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 7th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                    <h1><span style="font-weight: 600">Mickey Dora, Da Cat Model</span> | Greg Noll</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1966_S.481_F.jpg" id="img7" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>9'9" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>29lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>21.5 x 9.6ft x 3.5</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1966</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/481_Da_Cat_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- 8th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                  <h1><span style="font-weight: 600">Bonzer design</span> | Emotion/Campbell Brothers</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1973_S.381_F.jpg" id="img8" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>6'7" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>10lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>n/a</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1973</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/381_bonzer_info_card.jpg">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- 9th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                  <h1><span style="font-weight: 600">Cheyne Horan - "Laser Zap" Model</span> Geoff McCoy</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1981_S.435_F.jpg" id="img9" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>5'6" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>4lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>n/a</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1981</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/435_McCoy_Horan_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- 9th Modal End -->

            <!-- 10th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                  <h1><span style="font-weight: 600">7'6 Rounded Pintail Gun - Tom Curren's board</span> | Hamish Graham</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/1996_S.387_F.jpg" id="img9" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>7' ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>6bs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>n/a</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>1996</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/387_Hamish_gun_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 11th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                  <h1><span style="font-weight: 600">6'2" Squash Tail Andy Irons' Board</span> | HIC</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/2004_S.433_F.jpg" id="img9" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>6'2" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>4lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>74in</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>2004</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/433_HIC_AI_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 12th Modal in Photo Grid -->
            <div class="item">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="container">
                <div class="row-eq-height">
                  <div class="col-sm-6">
                  <h1><span style="font-weight: 600">6'4" DHD, Fanning Pro Model</span> | Darren Handley</h1>
                    <div class="p-img-wrapper">
                      <img class="p-img-profile" src="images/2009_S.332_F.jpg" id="img9" alt="" />
                    </div>
                    <div class="description">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Length:</td>
                            <td>6'4" ft.</td>
                          </tr>
                          <tr>
                            <td>Weight:</td>
                            <td>4lbs.</td>
                          </tr>
                          <tr>
                            <td>Dimensions:</td>
                            <td>18.5 x 71 x 2</td>
                          </tr>
                          <tr>
                            <td>Circa:</td>
                            <td>2009</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="b-img-group">
                      <div class="b-grid img1">
                        <img src="images/equipment/info-cards/332_DHD_Fanning_info_card.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- 12th Modal in Photo Grid End -->
          </div>
        </div>

      </div>
    </div>
  </div>
</div> <!-- End of Modal -->

<!-- ScrollMagic Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="scripts/scrollmagic_v2.js"></script>

</body>

</html>
