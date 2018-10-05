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
        <section id="titlechart">
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
        <section class="demo" id="section-wipes">
          <div id="pinContainer">
            <section class="panel blue">
              <b>ONE</b>
              <div class="left-side one" id="slide1-image">
              </div>
              <div class="right-side one" id="one-description">
                <div class="desc-inner">
                  <h3>Tom Blake</h3>
                  Blake was born (1902) in Milwaukee, Wisconsin, the son of a club steward and former bar owner. His mother died of tuberculosis when Blake was an infant, and his father left him to be raised by a series of Milwaukee-based relatives. Isolated as a child, Blake grew up to become a quiet and detached adult. At age nine or 10, he saw a newsreel featuring a short clip of surfing in Hawaii; at 18, as a high school dropout living in Detroit, Michigan, he met Hawaiian surfer and Olympic gold medal swimmer Duke Kahanamoku in a movie theater lobby. Blake moved to Los Angeles the following year where he began swimming competitively, and was soon one of the nation's best all-arounders, winning a 10-mile AAU race in 1922, and later defeating Kahanamoku himself in a 220-yard sprint.</p>
                </div>
              </div>
            </section>
            </section>
            
            <section class="panel turqoise">
              <b>TWO</b>
              <div class="left-side two" id="slide2-image">
              </div>
              <div class="right-side two" id="two-description">
                <div class="desc-inner">
                  <h3>Doc Ball</h3>
                  <p>Prototype surf photographer and surf club organizer from Los Angeles, California; founder of the Palos Verdes Surf Club in 1935; author of the seminal 1946-published California Surfriders. While Ball and Wisconsin-born Tom Blake are both credited as the forebears of surf photography, it was Ball who had the greater influence on the next generation of photographers, including fellow California surf world icons Leroy Grannis and Don James. "The quality of his shots was superb," James later said of Ball's work. "I always wanted to try and get photos as good as Doc's, and I never quite made it."</p>
                </div>
              </div>
            </section>
            <section class="panel green">
              <b>THREE</b>
              <div class="left-side one" id="slide1-image">
              </div>
              <div class="right-side one" id="one-description">
                <div class="desc-inner">
                  <h3>Bruce Brown</h3>
                  <p>Oscar-nominated surf moviemaker from Southern California; producer of 1966's The Endless Summer, the sport's best and best-known movie. Brown was born (1937) in San Francisco, California, spent his first nine years in Oakland, then moved with his family to Long Beach, in southwest Los Angeles County, where he began surfing.</p>
                </div>
              </div>
            </section>
            <section class="panel bordeaux">
              <b>FOUR</b>
              <div class="left-side one" id="slide1-image">
              </div>
              <div class="right-side one" id="one-description">
                <div class="desc-inner">
                  <h3>Bruce Brown</h3>
                  <p>Oscar-nominated surf moviemaker from Southern California; producer of 1966's The Endless Summer, the sport's best and best-known movie. Brown was born (1937) in San Francisco, California, spent his first nine years in Oakland, then moved with his family to Long Beach, in southwest Los Angeles County, where he began surfing.</p>
                </div>
              </div>
            </section>
          </div>

        </section>
      </div>
    </div>
  </div>

  <!--Included Footer php file -->
  <?php include("footer-include.php");?>
  
  <!-- ScrollMagic Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
  <script src="scripts/scrollmagic_main.js"></script>

</body>

</html>
