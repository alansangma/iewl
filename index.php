<?php
include_once('./include/init.php');
include_once('./include/generic_head_bstp.php');
/*
2015-08-15: 2 hours
- Index page and responsive

2015-08-22: 2.5 hours
- Index page fixes
- weight-loss.php made responsive
- nav styles

2015-09-05: 3 hours : People and Tools
2015-09-05: 3.5 hours : Tools
2015-09-05: 2.5 hours : Contact and debugging and final styling
2015-09-06: 2 hours : Mobile tabular navigation / homepage changes
*/
?>
<body>
  <?php
  include_once('./include/generic_page_top_bstp.php');
  ?>
  <div class="container-fluid carousel-container">
    <div class="carousel slide carousel-fade" id="iewlCarousel" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#iewlCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#iewlCarousel" data-slide-to="1"></li>
        <li data-target="#iewlCarousel" data-slide-to="2"></li>
        <li data-target="#iewlCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/slideshow/woman_front.jpg" alt="Healthy and Happy Woman">
          <div class="carousel-caption iewl-carousel-caption">
            <h3><a href="tools.php#bmi" title="Check Your BMI">Check Your BMI</a></h3>
            <a class="hidden-sm hidden-xs" href="tools.php#bmi" title="Check Your BMI">Get Started</a>
          </div>
        </div>
        <div class="item">
          <img src="images/slideshow/forks.jpg" alt="Healthy and Happy Woman">
          <div class="carousel-caption iewl-carousel-caption">
            <h3><a href="weight-loss.php" title="Learn About the Weight Loss Process">Learn About the Weight Loss Process</a></h3>
            <a class="hidden-sm hidden-xs" href="weight-loss.php" title="Learn About the Weight Loss Process">Get Started</a>
          </div>
        </div>
        <div class="item">
          <img src="images/slideshow/woman_side.jpg" alt="Healthy and Happy Woman">
          <div class="carousel-caption iewl-carousel-caption">
            <h3><a href="people.php#staff" title="Meet Our Bariatric Professionals">Meet Our Bariatric Professionals</a></h3>
            <a class="hidden-sm hidden-xs" href="people.php#staff" title="Meet Our Bariatric Professionals">Get Started</a>
          </div>
        </div>
        <div class="item">
          <img src="images/slideshow/apple.jpg" alt="Healthy and Happy Woman">
          <div class="carousel-caption iewl-carousel-caption">
            <h3><a href="tools.php#ideal-weight" title="Find Your Ideal Body Weight">Find Your Ideal Body Weight</a></h3>
            <a class="hidden-sm hidden-xs" href="tools.php#ideal-weight" title="Find Your Ideal Body Weight">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear tall_20"></div>
  <!-- CONTAINER -->
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2>Welcome.</h2>
        <p class="lead">We offer a physician supervised medical weight loss program to help you achieve a healthy weight.  The weight loss program uses a combination of high quality meal replacement products, appetite suppressants, exercise therapy, medication management, and dietary guidance to help you achieve your goals.</p>
        <p class="lead">We have flexible scheduling with morning, noon, and early evening appointments available for your convenience.</p>
      </div>
      <div class="clear tall_20 visible-sm visible-xs"></div>
      <div class="col-md-2 col-md-push-5">
        <a style='display:block;' href='http://www.zocdoc.com/practice/raincross-medical-group-27734?lock=true&isNewPatient=false&referrerType=Widget'>
        <img src='graphics/ZocDocApptButtonSmMed.png' border='0' /></a>
        <a style='display:block; position: relative; ' href='http://www.zocdoc.com' title='Powered by ZocDoc Doctor Directory'>
        <img src='http://offsiteSchedule.zocdoc.com/images/remote/powered-by-light.png' height='15px' width='92px' alt='Powered by ZocDoc Doctor Directory' /></a>
        <div class="clear tall_10"></div>
        <h4><a href="contact.php" title="Contact">Contact</a></h4>
        4646 Brockton Avenue<br />
        Suite 302<br/>
        Riverside, CA 92506<br />
        (951) 231-1363 or<br />
        (951) 774-2723<br />
        <table class="hours">
          <tbody>
            <tr>
              <td>Mon</td>
              <td>8:00am - 5:00pm</td>
            </tr>
            <tr>
              <td>Tues</td>
              <td>7:00am - 6:00pm</td>
            </tr>
            <td>Wed</td>
            <td>8:00am - 6:00pm</td>
            <tr>
              <td>Thurs</td>
              <td>7:00am - 6:00pm</td>
            </tr>
            <tr>
              <td>Fri</td>
              <td>8:00am - 5:00pm</td>
            </tr>
          </tbody>
        </table>
        <p style="color:#308fbf;font-size:10px;">We schedule during lunch on Mondays and Tuesdays!</p>
      </div>
      <div class="clear tall_40 visible-sm visible-xs"></div>
      <div class="col-md-4 col-md-pull-1 iewl-certs">
        <h3>Certifications &amp; Memberships</h3>
        <a title="American Board of Obesity Medicine" href="http://abom.org"> <img title="American Board of Obesity Medicine - Certified Diplomate"
        src="http://abom.org/wp-content/uploads/ABOM_DIPLOMATE_BADGE_small.jpg" alt="American Board of Obesity Medicine - Certified Diplomate" /> </a>
        <a title="American Board of Family Medicine" href="http://theabfm.org"> <img title="American Board of Family Medicine - Diplomate"
        src="https://www.theabfm.org/_images/logo_abfm.gif"  alt="American Board of Family Medicine - Diplomate" /> </a>
        <a href="http://asbp.org/siterun_data/about_asbp/" title="American Society of Bariatric Physicians" href="http://asbp.org">
        <img src="http://dev.asbp.org/images/badges/absp.120x120.png" alt="ASBP.org" style="border:none;" src="images/badges/absp.120x120.png" style="border: none;" /></a>
        <ul>
          <li>Member:  <a href="https://www.asbp.org/" title="American Society of Bariatric Physicians" target="_blank">American Society of Bariatric Physicians</a></li>
          <li>Member:  <a href="http://www.obesityaction.org/obesity-treatments/find-a-physician-or-surgeon" title="OAC Find a Physician Page" targe="_blank">Obesity Action Coalition</a></li>
          <li>Member:  <a href="http://overcomeobesitynow.org/" title="NOON external page link" target="_blank">Network to Overcome Obesity Now</a></li>
          <li>Member:  <a href="http://www.aafp.org/online/en/home.html" title="AAFP external page link" target="_blank">American Academy of Family Physicians</a></li>
          <li><a href="people.php#recognition" title="See more memberships and certifications">More &rarr;</a></li>
        </ul>
        
      </div>
      
      
    </div>
    <div class="clear tall_40"></div>
    <div class="row">
      <div class="clear tall_40 visible-sm visible-xs"></div>
      <div class="col-md-12 iewl-social">
        <h3>Our Social Network</h3>
        <ul>
          <li><a href="http://www.facebook.com/pages/Inland-Empire-Weight-Loss/151698548219925" title="Like us on Facebook" target="_blank" class="facebook_home">Like us on Facebook!</a></li>
          <li><a href="http://twitter.com/#!/InEmpWeightLoss" title="Follow us on Twitter!" class="twitter_home" target="_blank">Follow us on Twitter!</a></li>
          <li><a href="http://inlandempireweightloss.tumblr.com" title="Follow us on Tumblr!" class="tumblr_home" target="_blank">Follow us on Tumblr!</a></li>
          <li style="margin-right:0;"> <a href="http://youtu.be/4F-dx_z1Z4I" title="Watch us on YouTube" class="youtube_home" target="_blank">   </a></li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- /CONTAINER -->
  
  <!--////////////////////////////////////////-->
  <!--               FOOTER                   -->
  <?php
  $is_footer = true;
  include('./include/navigation_bstp.php');
  ?>
  <!--               FOOTER                   -->
  <!--////////////////////////////////////////-->
  
  <!-- Google Code for Home Conversion Page -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 988072025;
  var google_conversion_language = "en";
  var google_conversion_format = "3";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "tazWCI_A3QMQ2ZCT1wM";
  var google_conversion_value = 0;
  if (0.5) {
  google_conversion_value = 0.5;
  }
  /* ]]> */
  </script>
  <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
  <div style="display:inline;">
    <img height="0" width="0" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988072025/?value=0.5&amp;label=tazWCI_A3QMQ2ZCT1wM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>
  <!-- End Google Conversion Code -->
</body>
</html>