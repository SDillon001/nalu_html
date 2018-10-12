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
            <img class="photog-headshot" src="images/photo/jeff_divine_74_sunset_beach_profile_sized.jpg">
            <figcaption>
              Jeff Divine, La Jolla, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="1">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/ben_ginsberg.jpg" alt="ben ginsberg profile">
            <figcaption>
              Ben Ginsberg, Huntington Beach, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="2">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/stan-moniz_profile_sized.jpg">
            <figcaption>
              Stan Moniz, Orange County, CA
            </figcaption>
          </figure>
        </div>

        <!-- Image Grid Row 2 -->
        <div class="photog-group clearfix" data-slide="3">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/diane_edmonds.jpg">
            <figcaption>
              Diane Edmonds, Huntington Beach, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="4">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/justin_jung.jpg">
            <figcaption>
              Justin Jung, Orange County, CA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="5">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/maria_fernanda_photo-logan-jacobs.jpg">
            <figcaption>
              Maria Fernanda, Mexico City, MX
            </figcaption>
          </figure>
        </div>

        <!-- Image Grid Row 3 -->
        <div class="photog-group clearfix" data-slide="6">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/trevor_murphy.jpg">
            <figcaption>
              Trevor Murphy, Cape Cod, MA
            </figcaption>
          </figure>
        </div>

        <div class="photog-group clearfix" data-slide="7">
          <figure class="cap-bot">
            <img class="photog-headshot" src="images/photo/joe_oconnor.jpg">
            <figcaption>
              Joe O'Connor, Long Beach, NY
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
    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Carousel -->
            <div class="carousel slide" data-interval="false" id="MyCarousel" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#MyCarousel" data-slide-to="1"></li>
                <li data-target="#MyCarousel" data-slide-to="2"></li>
                <li data-target="#MyCarousel" data-slide-to="3"></li>
                <li data-target="#MyCarousel" data-slide-to="4"></li>
                <li data-target="#MyCarousel" data-slide-to="5"></li>
                <li data-target="#MyCarousel" data-slide-to="6"></li>
                <li data-target="#MyCarousel" data-slide-to="7"></li>
                <li data-target="#MyCarousel" data-slide-to="8"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">

                <!-- 1st Modal in Photo Grid -->
                <div class="item active">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                  <div class="row">
                    <h1><span style="font-weight: 600">Photographer:</span> Jeff Divine</h1>
                    <div class="col-1">
                      <div class="p-img-wrapper">
                        <img class="p-img-profile" src="images/photo/jeff_divine_74_sunset_beach_profile_sized.jpg" id="img1" alt="" />
                      </div>
                      <div class="description">
                        <p>Durable, good-natured surf photographer and photo editor from San Clemente, California; a steady surf world presence since the early 1970s, and long regarded as one of the genre's most versatile and dependable talents. Divine was born (1950) in San Diego, raised in the wealthy beach town of La Jolla, started surfing in 1964 and bought his first camera the following year; he soon began selling prints to his high school surfing friends for a dollar apiece.&nbsp;
                          <a href="https://jeffdivinesurf.com" target="_blank"><br><br>Website - Jeff Divine</a></p>
                        </div>
                      </div>

                      <div class="col-2">

                        <div class="p-img-group">
                          <div class="p-grid img1">
                            <img src="images/photo/divine/lopez_soul.jpg">
                          </div>

                          <div class="p-grid img2">
                            <img src="images/photo/divine/under_surfer_fiji.jpg">
                          </div>

                          <div class="p-grid img3">
                            <img src="images/photo/divine/rory_pipe_line.jpg">
                          </div>

                          <div class="p-grid img4">
                            <img src="images/photo/divine/70s_buttons_v_land_carve.jpg">
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

                    <div class="row">
                      <h1 class="modal-title">Photographer: Benjamin Ginsberg</h1>
                      <div class="col-1">
                        <div class="p-img-wrapper">
                          <img class="p-img-profile" src="images/photo/ben_ginsberg.jpg" id="img2" alt="ben ginsberg profile" />
                        </div>
                        <div class="description">
                          <p>Ben grew up between the southern Connecticut shore and the mountains of Vermont. Ben started his photography career in Boston and worked throughout the New England region as a photographer, urban planner, and freestyle ski coach. He founded Driftwood Photography Studios in 2005. Ben was a <a href="http://www.redbullillume.com/people/photographers/bio/benjamin-ginsberg.html" target="_blank">Top 50 Finalist in the 2013 Red Bull illume Image Quest.</a>&nbsp;
                            <a href="https://driftwoodfoto.com/" target="_blank"><br><br>Website - Driftwood Photography Studios</a></p>
                          </div>

                        </div>

                        <div class="col-2">
                          <div class="p-img-group">
                            <div class="p-grid img1">
                              <img src="images/photo/camera.jpg">
                            </div>

                            <div class="p-grid img2">
                              <img src="images/photo/camera.jpg">
                            </div>

                            <div class="p-grid img3">
                              <img src="images/photo/camera.jpg">
                            </div>

                            <div class="p-grid img4">
                              <img src="images/photo/camera.jpg">
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

                      <div class="row">
                        <h1><span style="font-weight: 600">Photographer:</span> Stan Moniz</h1>
                        <div class="col-1">
                          <div class="p-img-wrapper">
                            <img class="p-img-profile" src="images/photo/stan-moniz_profile_sized.jpg" id="img3" alt="" />
                          </div>
                          <div class="description">
                            <p>Action & adventure  photographer /  film maker Stan Moniz was a water baby at birth, raised in the quite surf town of  Waialua, Hawaii. He became a professional body boarder at the age of 18 and remains an avid surfer today. His passion for music brought him to Southern California in 2000 and after a very successful career in a professional touring band, he ultimately set his sights on his other great passion: photography.&nbsp;
                              <a href="http://www.stanmoniz.com" target="_blank"><br><br>Website - Stan Moniz</a></p>
                            </div>
                          </div>

                          <div class="col-2">
                            <div class="p-img-group">
                              <div class="p-grid img1">
                                <img src="images/photo/camera.jpg">
                              </div>

                              <div class="p-grid img2">
                                <img src="images/photo/camera.jpg">
                              </div>

                              <div class="p-grid img3">
                                <img src="images/photo/camera.jpg">
                              </div>

                              <div class="p-grid img4">
                                <img src="images/photo/camera.jpg">
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

                        <div class="row">
                          <h1><span style="font-weight: 600">Photographer:</span> Diane Edmonds</h1>
                          <div class="col-1">
                            <div class="p-img-wrapper">
                              <img class="p-img-profile" src="images/photo/diane_edmonds.jpg" id="img4" alt="" />
                            </div>
                            <div class="description">
                              <p>My mom was a War Bride but she grew up in Australia and was a Bondi beach girl.  She always took us to the beach when we were kids and she was the only mom I knew that actually went in the ocean!  She body surfed well into her mid 60’s until she broke her arm colliding with a boogie boarder while body surfing.
                                &nbsp;
                                <a href="https://www.yourwavepics.com/" target="_blank"><br><br>Website - Diane Edmonds</a></p>
                              </div>
                            </div>

                            <div class="col-2">
                              <div class="p-img-group">
                                <div class="p-grid img1">
                                  <img src="images/photo/camera.jpg">
                                </div>

                                <div class="p-grid img2">
                                  <img src="images/photo/camera.jpg">
                                </div>

                                <div class="p-grid img3">
                                  <img src="images/photo/camera.jpg">
                                </div>

                                <div class="p-grid img4">
                                  <img src="images/photo/camera.jpg">
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

                          <div class="row">
                            <h1><span style="font-weight: 600">Photographer:</span> Justin Jung</h1>
                            <div class="col-1">
                              <div class="p-img-wrapper">
                                <img class="p-img-profile" src="images/photo/justin_jung.jpg" id="img5" alt="" />
                              </div>
                              <div class="description">
                                <p>Justin Jung is a self taught photographer and cinematographer based in Southern California, although his work takes him all over the globe. For the past three years he has been following his dreams, traveling around the world, capturing breathtaking video along the way.</p>

                                <p>Justin often features subjects such as action sports, landscapes, documentaries and the ocean. In working to achieve his goals, he has obtained an established position with Rip Curl as a videographer as well as continuing to work with numerous other companies.</p>

                                <p>His work has been featured in National Geographic, Surfing Magazine, Departure Magazine, and many others. Justin continues to set the bar higher for himself, striving for larger goals in all aspects of his work.
                                  &nbsp;
                                  <a href="http://jungphoto.com/" target="_blank"><br><br>Website - Justin Jung</a></p>
                                </div>
                              </div>

                              <div class="col-2">
                                <div class="p-img-group">
                                  <div class="p-grid img1">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img2">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img3">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img4">
                                    <img src="images/photo/camera.jpg">
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

                            <div class="row">
                              <h1><span style="font-weight: 600">Photographer:</span> Maria Fernanda</h1>
                              <div class="col-1">
                                <div class="p-img-wrapper">
                                  <img class="p-img-profile" src="images/photo/maria_fernanda_photo-logan-jacobs.jpg" id="img6" alt="" />
                                </div>
                                <div class="description">
                                  <p>Born and raised in Mexico City (one of the largest cities in the world) Maria holds a Bachelor’s degree in Business Administration in Tourism and Hospitality Management.  Since she was a young girl she has had a passion for being in water.  While in high school, she was a swimmer for the regional team.  Whenever she had any spare time, she would escape to the beach and enjoy surfing.  Her other passion for photography started when she finished high school, taking many beautiful pictures around her hometown of Mexico City.  After graduating from college, she traveled to Hawaii where she combined her love of surfing with her passion for photography and began shooting pictures of surfers in the water.</p>
                                </div>
                              </div>

                              <div class="col-2">
                                <div class="p-img-group">
                                  <div class="p-grid img1">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img2">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img3">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img4">
                                    <img src="images/photo/camera.jpg">
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

                            <div class="row">
                                <h1><span style="font-weight: 600">Photographer:</span> Trevor Murphy</h1>
                              <div class="col-1">
                                <div class="p-img-wrapper">
                                <img class="p-img-profile" src="images/photo/trevor_murphy.jpg" id="img7" alt="" />
                              </div>
                              <div class="description">
                                  <p>Trevor Murphy was born and raised on Cape Cod, Massachusetts. Growing up on and around the ocean embedded a great love for the sea and a strong fondness of the natural world. Trevor's photos have appeared in and graced the covers of many magazines and editorials world wide. Trevor has won numerous international photography competitions with his unique and dramatic feel to his work. He has only been shooting photographs professionally for five years and is always looking for new and exciting ways to capture his perspective on life.</p>
                                </div>
                              </div>

                              <div class="col-2">
                                <div class="p-img-group">
                                  <div class="p-grid img1">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img2">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img3">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img4">
                                    <img src="images/photo/camera.jpg">
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

                            <div class="row">
                                <h1><span style="font-weight: 600">Photographer:</span> Joseph O'Connor</h1>
                              <div class="col-1">
                                <div class="p-img-wrapper">
                                <img class="p-img-profile" src="images/photo/joe_oconnor.jpg" id="img8" alt="" />
                              </div>
                                <div class="description">
                                  <p>Joseph O'Connor is a hyper-talented NY-based photographer with a knack for capturing the natural beauty ingrained into the south shore of Long Island.</p>

                                  <p>Born and raised in Long Beach, NY, he naturally developed a strong connection with the ocean, one that most people know pairs ever so eloquently with a passion for photography. His journey in photography began when his dad began teaching him how use a Pentax Super Program 35mm film camera during his high school years. Joseph's father loved capturing film photos of lighthouses and small coastal towns in the northeast, especially Maine.  It was these early forays into photographic expression that inspired a lot of what Joe enjoys shooting today.</p>

                                  <p>Joseph would go on to develop a lot of skills in the water while working as a full time City of Long Beach Lifeguard for 6 years. He continues to serve the City of Long Beach as a part-time weekend lifeguard.  In the future, he's planning on shooting a lot more water based surf and fine art photography.</p>

                                  <p>Currently, Joseph creates high quality images using Nikon and Aquatech Imaging Solutions equipment. He's best known for photos of the Long Beach Boardwalk and Long Island surf-Lineups.  He has been published in online galleries by the leading surf media outlets such as Surfing Magazine, Eastern Surf Magazine, Whalebone, Surfline, and Magic Seaweed.</p>

                                  <p>You can follow Joseph O'Connor on <a href="https://www.instagram.com/joeoc_photo/" target="_blank">Instagram here</a> and of course visit his <a href="http://www.boardwalkcanvas.com/shop/?category=Joseph+O%27Connor" target="_blank">Boardwalk Canvas store here!</a></p>
                                </div>
                              </div>

                              <div class="col-2">
                                <div class="p-img-group">
                                  <div class="p-grid img1">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img2">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img3">
                                    <img src="images/photo/camera.jpg">
                                  </div>

                                  <div class="p-grid img4">
                                    <img src="images/photo/camera.jpg">
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

                            <div class="row">
                              <div class="col-1">
                                <h1>9th Modal in Photo Grid</h1>
                                <img src="images/camera.png" id="img9" alt="" />
                              </div>

                              <div class="col-2">
                                <div class="description">
                                  <p>In the bricks 3rd reef burner oil rip the pit fair-good point break sand bottom. Elevator drop heavy slice healthy float tomb-stoning kelp slash quiver sand bottom A frames wonky.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Controls -->
                        <!-- <a href="#MyCarousel" class="left carousel-control photo" data-slide="prev"><span class="glyphicon left"></span></a>
                          <a href="#MyCarousel" class="right carousel-control photo" data-slide="next"><span class="glyphicon right"></span></a> -->

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
