<?php
include_once('./include/init.php');

include_once('./include/generic_head.php');

?>



<body>
<div class="container_12">

<?php
include_once('./include/generic_page_top.php');
?>
	<div class="grid_12">
     	<h2>Contact</h2>
     </div>
	<div class="clear tall_10"></div>
	<div class="grid_4">
          <h4>Address</h4>
     	<p>4646 Brockton Avenue, Ste 302
          <br />Riverside, CA 92506</p>
          
          <h4>Phone</h4>
          <p>(951) 231-1363</p>
          
          <h4>Email</h4>
          <p><a href="mailto:drknopke@inlandempireweightloss.com" title="email Dr. Carl Knopke">drknopke@inlandempireweightloss.com</a></p>
     </div>
     
     <div class="grid_4">
          <h4>Hours</h4>
          <p style="color:#000; font-size:14px; line-height:1.2em; margin-bottom:10px;">We schedule appointments during lunch<br />on Mondays and Tuesdays!</p>
          <table>
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
     </div>
            
     
     <div class="grid_4 omega">
          <h4>Tips For Getting In And Out of Clinic Fast</h4>
          <ul>
               <li>Fill out your new <a href="./weight-loss.php#forms" title="go to Forms">patient paperwork</a> and review the <a href="./weight-loss.php#forms" title="go to Forms">consent form</a> before you arrive.</li>
               <li>Make an early morning appointment.</li>
               <li>Be the first person on the schedule for a morning, lunch, or evening clinic.</li>
               <li>Ask for your meal replacements before you are seen.</li>
               <li>Wear sandals so it is faster to weigh you.</li>
          </ul>
            
     </div>
     
     <div class="clear tall_10"></div>
     
     <div class="grid_4">
            <h4>Membership</h4>
            <ul>
                 <li><a href="http://www.asbp.org/siterun_data/about_asbp/" title="ASBP page link" target="_blank">American Society of Bariatric Physicians</a></li>
                 <li><a href="http://familydoctor.org/online/famdocen/home.html" title="AAFP Patient Page" target="_blank">American Academy of Family Physicians</a></li>
                 <li><a href="http://www.rpndocs.com/" title="Riverside Physician Network Home Page" target="_blank">Riverside Physician Network</a></li>
                 <li><a href="http://www.ama-assn.org/ama/pub/patients/patients.shtml" title="AMA Patient Page" target="_blank">American Medical Association</a></li>
            </ul>
     </div>
     
     <div class="grid_8 omega">
     	<h4>Map</h4>
          <iframe width="620" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Inland+Empire+Weight+Loss,+Riverside,+CA&amp;aq=0&amp;sll=33.976108,-117.386856&amp;sspn=0.01105,0.017531&amp;vpsrc=6&amp;g=4646+Brockton+Avenue+Riverside,+CA&amp;ie=UTF8&amp;hq=Inland+Empire+Weight+Loss,&amp;hnear=Riverside,+California&amp;t=m&amp;cid=15593956082238007548&amp;ll=33.98721,-117.385483&amp;spn=0.028467,0.053129&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          <br />
          <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Inland+Empire+Weight+Loss,+Riverside,+CA&amp;aq=0&amp;sll=33.976108,-117.386856&amp;sspn=0.01105,0.017531&amp;vpsrc=6&amp;g=4646+Brockton+Avenue+Riverside,+CA&amp;ie=UTF8&amp;hq=Inland+Empire+Weight+Loss,&amp;hnear=Riverside,+California&amp;t=m&amp;cid=15593956082238007548&amp;ll=33.98721,-117.385483&amp;spn=0.028467,0.053129&amp;z=14&amp;iwloc=A" style="color:#308fbf;text-align:left">View Larger Map</a></small>
     </div>
     
     <div class="clear tall_20"></div>
            
	
     <div class="grid_12 omega">
          <h4>Photos</h4>
          	<img class="office_image" src="images/contact/Outside_edit300.jpg" width="300" height="200" alt="Exterior View of the Riverside office" title="Exterior View of the Riverside Office" />
          	<img class="office_image" src="images/contact/ThirdFloorLobby_edit300.jpg" width="300" height="200" alt="View of the Riverside Lobby" title="View of the Riverside Lobby" />
               <img class="office_image" src="images/contact/ThirdFloorWaitingRoom_edit300.jpg" width="300" height="200" alt="View of the Riverside Lobby" title="View of the Riverside Lobby" />
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
<?php 
//mysql_close($connection);
?>