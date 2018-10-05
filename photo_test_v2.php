<!doctype html>
<html>

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Photo</title>

<body>
  <!--Included Header php file -->
  <?php include("header-include_v2.php");?>

  <div id="content-wrapper">
    <div id="example-wrapper">
      <div class="scrollContent">
        <section class="box" id="titlechart">
          <div class="item photo container">
            <a href="#"><img class="item-image" src="images/photo/bruce_brown_feature.jpg" alt="bruce_brown" /></a>
          </div>
          <div id="description">
            <div class="desc-inner">
              <h3>Bruce Brown</h3>
              <p>Oscar-nominated surf moviemaker from Southern California; producer of 1966's The Endless Summer, the sport's best and best-known movie. Brown was born (1937) in San Francisco, California, spent his first nine years in Oakland, then moved with his family to Long Beach, in southwest Los Angeles County, where he began surfing.</p>
            </div>
          </div>
        </section>

        <section class="box demo" id="section-wipes">       
          <div class="left-side one" id="slide1-image">
          </div>
          <div class="right-side one" id="one-description">
            <div class="desc-inner">
              <h3>Tom Blake</h3>
            <p>Blake was born (1902) in Milwaukee, Wisconsin, the son of a club steward and former bar owner. His mother died of tuberculosis when Blake was an infant, and his father left him to be raised by a series of Milwaukee-based relatives. Isolated as a child, Blake grew up to become a quiet and detached adult. At age nine or 10, he saw a newsreel featuring a short clip of surfing in Hawaii; at 18, as a high school dropout living in Detroit, Michigan, he met Hawaiian surfer and Olympic gold medal swimmer Duke Kahanamoku in a movie theater lobby. Blake moved to Los Angeles the following year where he began swimming competitively, and was soon one of the nation's best all-arounders, winning a 10-mile AAU race in 1922, and later defeating Kahanamoku himself in a 220-yard sprint.</p>
          </div>
        </div>
      </section>

      <section class="box demo last-slide" id="section-wipes">       
        <div class="left-side two" id="slide2-image">
        </div>
        <div class="right-side two" id="two-description">
          <div class="desc-inner">
           <h3>Doc Ball</h3>
           <p>Prototype surf photographer and surf club organizer from Los Angeles, California; founder of the Palos Verdes Surf Club in 1935; author of the seminal 1946-published California Surfriders. While Ball and Wisconsin-born Tom Blake are both credited as the forebears of surf photography, it was Ball who had the greater influence on the next generation of photographers, including fellow California surf world icons Leroy Grannis and Don James. "The quality of his shots was superb," James later said of Ball's work. "I always wanted to try and get photos as good as Doc's, and I never quite made it."</p>
         </div>
       </div>
     </section>

     <section class="box demo"> 

     </section>


     <section class="box demo">       
      <!-- Main Content -->
      <div class="main-content">
        <div class="photo-grid-head">
          <h1 class="local-photogs">Local Surf Photographers</h1>
          <h2 class="local-photogs">~ click below for more info ~</h2>
        </div>
      </div>
      </section>

      <div class="photogs">

        <!-- Image Grid Row 1 -->
        <div class="photog-group clearfix" data-slide="0">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/ben_ginsberg.jpg" alt="ben ginsberg profile">
            <figcaption>
              Ben Ginsberg, Huntington Beach, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="1">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/stan-moniz_profile_sized.jpg">
            <figcaption>
              Stan Moniz, Southern California, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="2">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/jeff_divine_74_sunset_beach_profile_sized.jpg">
            <figcaption>
              Jeff Divine, La Jolla, CA
            </figcaption>
          </figure>
        </div>

        <!-- Image Grid Row 2 -->
        <div class="photog-group clearfix" data-slide="3">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="4">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="5">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

        <!-- Image Grid Row 3 -->
        <div class="photog-group clearfix" data-slide="6">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="7">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="8">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/camera.png">
            <figcaption>
              Bruce Brown, Malibu, CA
            </figcaption>
          </figure>
        </div>

      </div>
    </div>

  <!-- Modal Code Start -->
  <div class="modal fade  " id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Indicators -->
          <div class="carousel slide" data-interval="false" id="MyCarousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner timeline">

              <!-- 1st Modal in Photo Grid -->
              <div class="item active">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="row">
                  <h1 class="modal-title">Photographer: Benjamin Ginsberg</h1>
                  <div class="col-1">
                    <img src="images/photo/ben_ginsberg.jpg" id="img1" alt="ben ginsberg profile" />
                  </div>

                  <div class="col-2">
                    <div class="description"></div>
                    <p>Ben grew up between the southern Connecticut shore and the mountains of Vermont. Ben started his photography career in Boston and worked throughout the New England region as a photographer, urban planner, and freestyle ski coach. He founded Driftwood Photography Studios in 2005. Ben was a <a href="http://www.redbullillume.com/people/photographers/bio/benjamin-ginsberg.html" target="_blank">Top 50 Finalist in the 2013 Red Bull illume Image Quest.</a>&nbsp;
                      <a href="https://driftwoodfoto.com/" target="_blank"><br><br>Website - Driftwood Photography Studios</a></p>
                    </div>
                  </div>
                </div>

                <!-- 2nd Modal in Photo Grid -->
                <div class="item">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                  <div class="row">
                    <h1><span style="font-weight: 600">Photographer:</span> Stan Moniz</h1>
                    <div class="col-1">
                      <img src="images/photo/stan-moniz_profile_sized.jpg" id="img2" alt="" />
                    </div>

                    <div class="col-2">
                      <div class="description"></div>
                      <p>Action & adventure  photographer /  film maker Stan Moniz was a water baby at birth, raised in the quite surf town of  Waialua, Hawaii. He became a professional body boarder at the age of 18 and remains an avid surfer today. His passion for music brought him to Southern California in 2000 and after a very successful career in a professional touring band, he ultimately set his sights on his other great passion: photography.&nbsp;
                        <a href="http://www.stanmoniz.com" target="_blank"><br><br>Website - Stan Moniz</a></p>
                      </div>
                    </div>
                  </div>

                  <!-- 3rd Modal in Photo Grid -->
                  <div class="item">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="row">
                      <h1><span style="font-weight: 600">Photographer:</span> Jeff Divine</h1>
                      <div class="col-1">
                        <img src="images/photo/jeff_divine_74_sunset_beach_profile_sized.jpg" id="img3" alt="" />
                      </div>

                      <div class="col-2">
                        <div class="description"></div>
                        <p>Durable, good-natured surf photographer and photo editor from San Clemente, California; a steady surf world presence since the early 1970s, and long regarded as one of the genre's most versatile and dependable talents. Divine was born (1950) in San Diego, raised in the wealthy beach town of La Jolla, started surfing in 1964 and bought his first camera the following year; he soon began selling prints to his high school surfing friends for a dollar apiece.&nbsp;
                          <a href="https://jeffdivinesurf.com" target="_blank"><br><br>Website - Jeff Divine</a></p>
                        </div>
                      </div>
                    </div>

                    <!-- 4th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>4th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img4" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 5th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>5th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img5" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 6th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>6th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img6" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 7th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>7th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img7" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 8th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>8th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img8" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 9th Modal in Photo Grid -->
                    <div class="item">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                      <div class="row">
                        <div class="col-1">
                          <h1>9th Modal in Photo Grid</h1>
                          <img src="images/camera.png" id="img9" alt="" />
                        </div>

                        <div class="col-2">
                          <div class="description"></div>
                          <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a href="#MyCarousel" class="left carousel-control timeline" data-slide="prev"><span class="glyphicon left"></span></a>
                  <a href="#MyCarousel" class="right carousel-control timeline" data-slide="next"><span class="glyphicon right"></span></a>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      <section class="end">
      <!--Included Header php file -->
      <?php include("footer-include.php");?>
      </section>

        <!-- ScrollMagic Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="scripts/scrollmagic_v2.js"></script>

      </body>

      </html>
