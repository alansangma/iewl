<?php
include_once('./include/init.php');

include_once('./include/generic_head.php');

?>



<body>
<div class="container_12">
<?php
//echo 'USER AGENT : '.$user_agent. ' :::: is IE: ' . $is_ie;
include_once('./include/generic_page_top.php');

$style = !$is_ie7 ? '' : ' style="position:absolute; width:100%; bottom:0; left:0; background:url(./graphics/ffffff-70per.png) repeat; text-align:center;padding:5px 0;"';

?>
	<div class="clear"></div>
     
     <div class="grid_12 alpha omega" id="slideshow">
     	<div class="grid_12 ds_2 rounded slide" style="background:url(images/slideshow/woman_front.jpg) no-repeat center; height:245px; display:block;">
               <div class="call_to_action"<?php echo $style;?>>
                    <a href="tools.php#bmi" title="Check Your BMI">Check Your BMI</a>
               </div>
          </div>
          
          
          
     	<div class="grid_12 ds_2 rounded slide" style="background:url(images/slideshow/forks.jpg) no-repeat center; height:245px; display:none;">
               <div class="call_to_action"<?php echo $style;?>>
               	<a href="weight-loss.php" title="Learn About the Weight Loss Process">Learn About the Weight Loss Process</a>
               </div>
          </div>
          
     	<div class="grid_12 ds_2 rounded slide" style="background:url(images/slideshow/woman_side.jpg) no-repeat center; height:245px; display:none;">
               <div class="call_to_action"<?php echo $style;?>>
               	<a href="people.php#staff" title="Meet Our Bariatric Professionals">Meet Our Bariatric Professionals</a>
               </div>
          </div>
          
     	<div class="grid_12 ds_2 rounded slide" style="background:url(images/slideshow/apple.jpg) no-repeat center; height:245px; display:none;">
               <div class="call_to_action"<?php echo $style;?>>
               	<a href="tools.php#ideal-weight" title="Find Your Ideal Body Weight">Find Your Ideal Body Weight</a>
               </div>
          </div>
     </div>
     <div class="clear"></div>
     <div id="slideshow_nav"></div>
          
     <div class="clear tall_20"></div>
     
     
     <h2>Welcome.</h2>
     <div class="grid_10 alpha">
          <div class="grid_5 alpha home_copy">
               <p>We offer a physician supervised medical weight loss program to help you achieve your goals.  Our weight loss program uses a combination of high quality meal replacement products, appetite suppressants, exercise guidance and dietary management.</p>
          </div>
          <div class="grid_5 omega home_copy">
               <p>Our Riverside weight loss clinic has flexible scheduling with morning, noon, and early evening hours available for your convenience.</p>
          </div>
          <div class="clear tall_20"></div>
          
          
     	<div class="grid_5 alpha">
          	<h3>Memberships and Certification</h3>
          	<ul style="margin-top:20px;">
               	<li>Member:  <a href="http://www.asbp.org/siterun_data/about_asbp/" title="ASBP external page link" target="_blank">American Society of Bariatric Physicians</a></li>
                    <li>Member:  <a href="http://www.aafp.org/online/en/home.html" title="AAFP external page link" target="_blank">American Academy of Family Physicians</a></li>
                    <li>Board Certified in Family Medicine:  <a href="https://www.theabfm.org/" title="ABFM external page link" target="_blank">American Board of Family Medicine</a></li>
                    <li><a href="people.php#recognition" title="See more memberships and certifications">More &rarr;</a></li>
               </ul>
          </div>
          
          
          <div class="grid_5 omega social_links social_links_home">
          	<h3>Our Social Network</h3>
               <ul>
                    <li><a href="http://www.facebook.com/pages/Inland-Empire-Weight-Loss/151698548219925" title="Like Inland Empire Weight Loss on Facebook" target="_blank" class="facebook_home">Like us on Facebook!</a></li>
                    <li><a href="http://twitter.com/#!/InEmpWeightLoss" title="Follow us on Twitter!" class="twitter_home" target="_blank">Follow us on Twitter!</a></li>
                    <li style="margin-right:0;"><a href="http://inlandempireweightloss.tumblr.com" title="Follow us on Tumblr!" class="tumblr_home" target="_blank">Follow us on Tumblr!</a></li>
               </ul>
          </div>
     </div>
     
     <div class="grid_2 omega">
          <h4><a href="contact.php" title="Contact">Contact</a></h4>
     	<p>4646 Brockton Avenue, Ste 302
          <br />Riverside, CA 92506<br>
          (951) 231-1363</p>
          
          <h4><a href="contact.php" title="Contact">Hours</a></h4>
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
          <p style="color:#308fbf;font-size:10px;">We schedule appointments during lunch on Mondays and Tuesdays!</p>
     </div>


     <!--////////////////////////////////////////-->
     <!--               FOOTER                   -->
<?php 
$is_footer = true;
include('./include/navigation.php');

?>
     <!--               FOOTER                   -->
     <!--////////////////////////////////////////-->
</div>
</body>
</html>