<footer>
  <div class="footer" id="section7">
    <!-- Footer Row 1 -->
    <div class="container-fluid">
      <div class="top-1 row">
        <!-- Column 1 -->
        <div class="col-md-4 left">
          <h5>Vision</h5>
          <p class="footer-text left">Nalu.live is a website for surfers and non-surfers alike who love the sport of surfing and the culture that surrounds it. This website provides an interactive way for you to learn more about how the sport of surfing has evolved over the years and
          how innovations in surf photography have influenced some of those changes.</p>

          <p class="footer-text left">Thanks for visiting!</p>
        </div>
        <!-- Column 2 -->
        <div class="col-md-4 center">
          <h5>Contact</h5>
          <p class="footer-text">&copy; Steve Dillon 2017<br> Orange County, CA 92656
            <address>
              <a href="mailto:stevedillon001@gmail.com">stevedillon001@gmail.com</a>
            </address>
            <a href="http://stevedillon.net/" target="_blank">SteveDillon.net
            </a>
          </p>
        </div>

        <!-- Column 3 -->
        <div class="col-md-4 right">
          <h5>Newsletter</h5>
          <!--Start Newsletter Signup-->          
          <?php
          if( $posted ) {
            if( $result ) 
              echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
            else
              echo "<script type='text/javascript'>alert('failed!')</script>";
          }
          ?>

          <form action="insert_news_user.php" method="post" id="news_signup" name="" class="">
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
              <br>
              <input class="form-control" type="text" name="Fname" placeholder="Enter Your Name" id="">
              <br>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1d58f9ef366258591bc129b44_252074c059" tabindex="-1" value="">
              </div>

              <div class="clear">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer Row 2 -->
      <div class="container-fluid">
        <div class="top-2 row">

          <!-- Column 1 -->
          <div class="col-md-4 bottom left">
            <h5>Get Connected</h5>
            <div class="imGrid social">
              <div class="flex-item social">
                <a href="https://www.facebook.com/Nalulive-the-History-of-Surfing-342411326336995/" target="_blank"><img src="images/facebook.png" alt="facebook.png"></a>
              </div>
              <div class="flex-item social">
                <a href="https://www.instagram.com/nalu.live/" target="_blank"><img src="images/instagram.png" alt="instagram.png"></a>
              </div>
              <div class="flex-item social">
                <a href="https://www.linkedin.com/in/stevedillon1/" target="_blank"><img src="images/linkedin.png" alt="linkedin.png"></a>
              </div>
            </div>
          </div>

          <!-- Column 2 -->
          <div class="col-md-4 bottom center">
            <h5>Nalu.live on Instagram</h5>
            <!-- Instagram feed from https://www.codeofaninja.com/2015/01/display-instagram-feed-website.html -->
            <?php
              // use this instagram access token generator http://instagram.pixelunion.net/
            $access_token="8665918919.1677ed0.9155d4bf992b4be382bb08004d555055";
            $photo_count=8;

            $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
            $json_link.="access_token={$access_token}&count={$photo_count}";

            $json = file_get_contents($json_link);
            $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

            foreach ($obj['data'] as $post) {

              $pic_link=$post['link'];
              $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);

              echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
              echo "<a href='{$pic_link}' target='_blank'>";
              echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
              echo "</a>";
              echo "<p>";
              echo "<p>";
              echo "<div style='color:#888;'>";
              echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
              echo "</div>";
              echo "</p>";
              echo "<p>{$pic_text}</p>";
              echo "</p>";
              echo "</div>";
            }
            ?>
          </div>

          <!-- Column 3 -->
          <div class="col-md-4 bottom right">
            <h5>Contributors List</h5>
            <ul class="footer-list left">
              <li><a href="http://shacc.org/" target="_blank">Surfing Heritage and Culture Center</a></li>
              <li><a href="https://eos.surf/history/" target="_blank">"The History of Surfing", Matt Warshaw</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Warren_Bolster" target="_blank">Warren Bolster</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Tom_Blake_(surfer)" target="_blank">Tom Blake</a></li>
              <li><a href="https://jeffdivinesurf.com/" target="_blank">Jeff Divine</a></li>
              <li><a href="https://driftwoodfoto.com/" target="_blank">Ben Ginsberg</a></li>
              <li><a href="https://tmurphyphotography.smugmug.com/" target="_blank">Trevor Murphy</a></li>
            </ul>

            <ul class="footer-list right">
              <li><a href="https://www.yourwavepics.com/" target="_blank">Diane Edmonds</a></li>
              <li><a href="https://www.nathanfrenchphotography.com/" target="_blank">Nathan French</a></li>
              <li><a href="http://www.mariafernandaphoto.com/" target="_blank">Maria Fernanda</a></li>
              <li><a href="https://www.adamking.photo/" target="_blank">Adam King</a></li>
              <li><a href="https://www.instagram.com/joeoc_photo/?hl=en" target="_blank">Joe O'Connor</a></li>
              <li><a href="http://www.stanmoniz.com/" target="_blank">Stan Moniz</a></li>
            </ul>
          </div>

        </div>
      </div>

  <!-- Bottom Row -->
  <div class="container-fluid">
    <div class="bottom row">
      <!-- Column 1 -->
      <div class="col-md-12">
        <h5><a href="index.php">© 2018 Nalu.com</a></h5>

        <ul class="nav footer navbar-nav">
          <!-- <li class="active"><a href="index.php">Home</a></li> -->
          <li><a href="timeline.php">Timeline</a></li>
          <li><a href="photographers.php">Photographers</a></li>
          <li><a href="equipment.php">Equipment</a></li>
          <!-- <li><a href="people.php">People</a></li>
          <li><a href="share.php">Share</a></li> -->
        </ul>
      </div>
    </div>

    <!-- Back to top Arrow from https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    <a id="back2Top" title="Back to top" href="#"><span class="glyphicon up"></span></a>

  </div>

  <!-- ScrollMagic Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
  <script src="scripts/scrollmagic_main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
  <script>
    ! function(A, n, g, u, l, a, r) {
      A.GoogleAnalyticsObject = l, A[l] = A[l] || function() {
        (A[l].q = A[l].q || []).push(arguments)
      }, A[l].l = +new Date, a = n.createElement(g),
      r = n.getElementsByTagName(g)[0], a.src = u, r.parentNode.insertBefore(a, r)
    }(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-102205886-1');
    ga('send', 'pageview');
  </script>
</footer>