<?php
include_once('./include/init.php');

include_once('./include/generic_head.php');

include_once('./include/functions.php');

?>



<body>
<div class="container_12">
<?php
include_once('./include/generic_page_top.php');

require_once('./include/config.php');

echo'
	<div class="grid_12">
     	<h2>Our Weight Loss Program</h2>
		<a href="#forms">&darr; Jump to Forms</a>
     </div>
	<div class="clear tall_10"></div>
';
/*
$connection = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $connection);

$query = "SELECT title, description FROM weightloss WHERE visible = 1 ORDER BY ordering";
$result = mysql_query($query) or die('error SELECTing from weightloss : '. mysql_error());

$count = 0;
while ($obj = mysql_fetch_object($result)) {
	$title = nl2br($obj->title);
	$body =  str_replace("\n", '<br /><br />', htmlspecialchars_decode($obj->description));//nl2br($obj->description);
	
	$body = detectUrls($body);
	
	echo '
		<div class="grid_12" style="margin-bottom:10px;">
			<h3>'.$title.'</h3>
			<p class="columns_2">'.$body.'</p>
			<hr />
		</div>
	';
	
}

mysql_close($connection);*/
?>
	<!--/////////////////////-->
	<!--     LEFT COLUMN     -->	
	<div class="grid_6">
          <h3>Who We Are:</h3>
          <div style="display:inline; float:right; width:25%;">
                    <a href="documents/ASBPGuidelinesForOverweightAndObesityEvaluationManagement.pdf" title="ASBP Guidelines For Overweight And Obesity Evaluation Management" target="_blank" class="pdf"><img src="graphics/pdf-icon.png" title="ASBP Guidelines For Overweight And Obesity Evaluation Management" width="60" height="60"  /></a>
                    <div class="clear"></div>
                    <a href="documents/ASBPGuidelinesForOverweightAndObesityEvaluationManagement.pdf" title="ASBP Guidelines For Overweight And Obesity Evaluation Management" target="_blank" class="pdf_link">&darr; ASBP guidelines</a>
          </div>
          <p style="text-align:justify;">We are not your standard weight loss clinic.  We are bariatric professionals.   The field of Medical Bariatrics is the science of weight loss and our governing society is The American Society of Bariatric Physicians (<a href="http://www.asbp.org" target="_blank">www.asbp.org</a>) .  We are bound to adhere to the guidelines set forth by the ASBP.  Inland Empire Weight Loss has three trained providers to assist you in your individualized weight loss plan.  Our training in this area is not simply one of opening a 'diet' clinic and issuing anorectic medications.  Between our 3 providers, we have had extensive training from the ASBP (<a href="http://www.asbp.org" target="_blank">www.asbp.org</a>) in designing an individualized plan to help you lose weight and become healthier.  
     	 </p>
          
          <hr />
          
          
          <h3>Bariatric Medicine:</h3>
          <p>Because we are Medical Bariatric Clinic, we deal with any weight related problem.  Many of our patients may be younger and overweight and have not yet encountered the metabolic problems that often go together with having an excess amount of body fat.  For these individuals, the weight loss process can be more straightforward.  However, many of our patients are older and can have multiple complicating medical problems that make the weight loss process more challenging.</p>
          <p>These issues can be extensive and can include:</p>
          <ul>
               <li>Insulin resistance</li>
               <li>Metabolic syndrome</li>
               <li>Diabetes</li>
               <li>Psychiatric problems such as depression, anxiety, and binge eating disorder</li>
               <li>Gout</li>
               <li>High blood pressure</li>
               <li>Sarcopenia (low muscle mass)</li>
               <li>Osteoarthritis</li>
               <li>Renal insuffiency</li>
               <li>Kidney stones</li>
               <li>Fatty liver</li>
               <li>Heightened Risk for several types of cancers</li>
               <li>This is only a partial list&hellip;</li>
          </ul>
          <p>For those who have weight related problems, we are trained in treating these problems or referring you to a specialist who can assist in your weight loss plan.  We treat all ages from the very young to the very old to either prevent weight related problems or to solve problems that have been created by a lifetime of being overweight.</p>
          
          <hr />
          
          
          <h3>Forms</h3>
          <div id="forms" class="grid_2 alpha" style="text-align:center;">
          	<a href="documents/NewPatientWeightLossPacket.pdf" title="New Patient Weight Loss Packet" target="_blank" class="pdf"><img src="graphics/pdf-icon.png" title="New Patient Weight Loss Packet" width="60" height="60" /></a>
          	<a href="documents/NewPatientWeightLossPacket.pdf" title="New Patient Weight Loss Packet" target="_blank" class="pdf_link">Weight Loss Patient<br />Packet</a>
          </div>
          <div class="grid_2" style="text-align:center;">
          	<a href="documents/NewPatientPacket.pdf" title="New Patient Packet" target="_blank" class="pdf"><img src="graphics/pdf-icon.png" title="New Patient Packet" width="60" height="60" /></a>
          	<a href="documents/NewPatientPacket.pdf" title="New Patient Packet" target="_blank" class="pdf_link">New Patient<br />Packet</a>
          </div>
          <div class="grid_2 omega" style="text-align:center;">
          	<a href="documents/InformedConsentLowCalAnorecticShortVer3.pdf" title="Informed Consent" target="_blank" class="pdf"><img src="graphics/pdf-icon.png" title="Informed Consent" width="60" height="60" /></a>
          	<a href="documents/InformedConsentLowCalAnorecticShortVer3.pdf" title="Informed Consent" target="_blank" class="pdf_link">Informed Consent</a>
          </div>
          
          
     </div>
	<!--     LEFT COLUMN     -->	
	<!--/////////////////////-->
     
     
     
     <!--/////////////////////-->
     <!--     RIGHT COLUMN    -->
     <div class="grid_5 push_1">
          
          <h3>How We Help You:</h3>
          <p>We use many tools in helping each individual to lose weight and become healthier.  First we will optimize your diet.  We stress that each patient get an optimal amount of protein in their diet.  This can be accomplished either with a specific dietary plan, the liberal use of medical grade meal replacements, or most likely a combination of the two.  This will help you to lower your caloric intake, avoid hunger, and most importantly to alter your metabolism to one that stops storing fat and starts to burn the fat you already have.</p>
          <p>The second thing we will do is optimize your pharmaceutical regimen.  For people who have multiple medical problems, they can be on a wide variety of medications.  Often, these medications can be causing you to gain weight and have kept you from losing weight.   By optimizing your medical regimen, we can turn this process around so that you can start losing weight.  More importantly, by changing your medication profile, we can often reverse the long trend that many people have of continuously being given more and more medications and we can start to decrease the number of medications that you are taking.  We have taken many people off of their medications altogether.</p>
          <p>We will see if you are appropriate to take an appetite suppressant.  Weight gain and poor eating habits are often a self fulfilling cycle.  If you eat low quality food, you tend to continue to crave this same low quality food.  For appropriate individuals, an appetite suppressant can help you to get out of this cycle.  Some of our patients have already been on an appetite suppressant and they have experienced problems that do not allow them to be on an anorectic medication.   For these individuals, we can often alter the dose, change the medication entirely, or change the formulation to give them something that they can tolerate.  Additionally, anorectic medications can have a thermogenic effect.  This means that they can help your metabolism to go faster and burn more calories and thus help in the weight loss process.</p>
          <p>We will design an exercise program for you.  Any exercise program is not necessarily the right exercise program.  Often, we encounter people who exercise in the wrong way and this limits their weight loss ability.  We will design an exercise program that helps you to lose weight and retain muscle mass and work with your schedule.</p>
          <p>We have flexible hours.  We realize that most of our patients work and trying to come in from work can be a trying experience.  For these people we offer flexible hours.  Between our three providers, we have two mornings when we are open before you go into work.   We are open at 7:00 am two days per week.  If you work locally, then we offer a lunch clinic that you can come to on your lunch break.  Additionally, our clinic has early evening hours so that you can come in on your way home.  We take our last patient at 6:00pm 2 days per week.</p>
          <p>After you are done with the program, we will place you on a maintenance program to help you to maintain your accomplishment.  Part of our maintenance program is the continuous training that you will receive throughout your program.  We will teach your how to eat and how to exercise.  After you have reached your goal, many people have already learned what the appropriate foods to eat are.  Some of our patients will continue to come back and purchase our meal replacements because of their convenience and ease of use in maintaining their weight.  We will offer all of our patients periodic follow up visits after their goal weight has been reached to make sure they are maintaining their weight loss accomplishment.</p>
          </div>
     <!--     RIGHT COLUMN    -->
     <!--/////////////////////-->
     
     

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