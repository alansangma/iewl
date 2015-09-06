<?php
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$is_ie7 = (strpos($user_agent, 'msie 7') > 0 ? 1 : 0);
?>
<div class="col-md-10">
     <h3>Calculate your ideal body weight</h3>
</div>
<div class="clear"></div>

     <div class="col-md-6 ">
          <p>A frequent question I receive from patients is &ldquo;what should be my ideal body weight?&rdquo;  This question is actually hard to answer and is somewhat controversial.  One method would be to tell someone what their weight would be by giving them their weight at a range of appropriate BMI&rsquo;s.  This results in a pretty broad range of ideal weights. </p>
          <p>Also there is the problem of muscle mass.  See my explanation on the <a href="#bmi" title="view BMI Calculator">BMI page</a>.  There are many formulas that will give an ideal body weight.   The formula that is most appropriate for what is a healthy weight is to get a weight based on the Metropolitan Life Insurance Tables.  These tables will recommend a weight for a person that is associated with the longest life span and are based on actuarial tables.  </p>
          <p>Unlike the actual Metropolitan Life Insurance Tables, the weight and height used here are based on your height without shoes and your weight without clothes which I believe is how most people measure themselves at home.  If you weigh yourself in your clothes then add 3 pounds for women and 5 pounds for men which is what is assumed by Metropolitan Life.  If you measure yourself in shoes then you should subtract an inch from your height which is also assumed by Metropolitan Life.  </p>
          <p>The formula used on the right is a custom formula that approximates the values found in the Metropolitan Life Insurance Actuarial Tables.</p>
     </div>
     <div class="col-md-2 col-md-offset-1">
          <form class="tools_form" name="tools_form" method="post" onsubmit="return false;">
               <table class="form_table">
                    <tbody>
                         <tr>
                              <td colspan="2"><h4>HEIGHT</h4></td>
                         </tr>
                         <tr>
                              <td class="label_d">
                                   <label for="feet">Feet:</label>
                              </td>
                              <td>
                                   <input type="number" name="ideal_feet" class="number_input" id="ideal_feet" tabindex="1" />
                              </td>
                         </tr>
                         <tr>
                              <td class="label_d">
                                   <label for="inches">Inches:</label>
                              </td>
                              <td>
                                   <input type="number" name="inches" class="number_input" id="ideal_inches" tabindex="2" />
                              </td>
                         </tr>
                         <tr>
                              <td colspan="2"><h4 style="float:left;">FRAME</h4><?php if(!$is_ie7) {?><a href="javascript:;" style="float:left; margin-left:5px; margin-top:0px; padding-bottom:2px;" class="show_info" rel="frame_info" title="view more info about Frame Size">?</a><?php }?></td>
                         </tr>
                         <tr><!--
                              <td class="label_d">
                                   <label for="frame_size">FRAME: <a href="javascript:;" class="show_info" rel="frame_info" title="view more info about Frame Size">?</a></label>
                              </td>-->
                              <td colspan="2">
                                   <select class="select_input" name="frame_size" id="frame_size" tabindex="3">
                                        <option value="select">select</option>
                                        <option value="SMALL">SMALL</option>
                                        <option value="MEDIUM">MEDIUM</option>
                                        <option value="LARGE">LARGE</option>
                                        <?php if(!$is_ie7) {?>
                                        <option value="learn more&raquo;" rel="frame_info">learn more&raquo;</option>
                                        <?php }?>
                                   </select>
                                   
                                   <?php if(!$is_ie7) {?>
                                   <p class="info_note ds_2" id="frame_info">See the tables below to determine your Frame Size.<br /><a href="javascript:;" class="closer" rel="frame_info">&times;</a></p>
                                   <?php }?>
                              </td>
                         </tr>
                         <tr>
                              <td colspan="2"><h4>SEX</h4></td>
                         </tr>
                         <tr><!--
                              <td class="label_d">
                                   <label for="frame_size">SEX:</label>
                              </td>-->
                              <td colspan="2">
                                   <select class="select_input" name="sex" id="ideal_sex" tabindex="4">
                                        <option value="select">select</option>
                                        <option value="FEMALE">FEMALE</option>
                                        <option value="MALE">MALE</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td colspan="2">
                                   <!-- <input type="submit" name="submit" class="submit_input" value="CALCULATE" onclick="initIdealWeightCalculation();" /> -->
                                   <input type="submit" name="submit" class="submit_input" value="CALCULATE" id="ideal_submit" />
                              </td>
                         </tr>
                    </tbody>
               </table>
          </form>
     </div>
     <div class="col-md-3  calc_result_wrapper">
          <h4>YOUR IDEAL WEIGHT</h4>
          <div id="ideal_result" class="calc_result"></div>
          <p class="note">*Measurement given in pounds</p>
     </div>

     
     
     
     <div class="clear tall_20"></div>
     <hr>
     
     
     <!--/////////////////////////////////////-->
     <!--            FINGER WRAP              -->
     <div class="col-md-7">
          <h3 style="margin:20px 0 10px 0; padding:0;">Measurement Methods</h3>
     </div>
     <div class="col-md-7  info_table_wrapper">
          <h4>Finger Wrap Method <span style="font-size:12px;">(easiest and least accurate)</span></h4>
          <p>Wrap your thumb and middle finger around the bony prominences of your wrist.  <!--See your size in the table below.-->    </p>
          <table class="info_table">
               <thead>
                    <tr class="table_title_row">
                         <td>
                              <h5>FRAME SIZE</h5>
                         </td>
                         <td>
                              <h5>WRIST MEASUREMENT</h5>
                         </td>
                    </tr>
               </thead>
               <tbody>
                    <tr class="odd">
                         <td>
                              Small
                         </td>
                         <td>
                              Your fingers overlap.
                         </td>
                    </tr>
                    <tr>
                         <td>
                              Medium
                         </td>
                         <td>
                              Your fingers touch.
                         </td>
                    </tr>
                    <tr class="odd">
                         <td>
                              Large
                         </td>
                         <td>
                              Your fingers are separated.
                         </td>
                    </tr>
               </tbody>
          </table>
     </div>
     <!--            FINGER WRAP              -->
     <!--/////////////////////////////////////-->
     
     
     <div class="clear tall_20"></div>
     
     <!--/////////////////////////////////////-->
     <!--            MEASURE WRIST            -->
     <div class="col-md-7  info_table_wrapper">
          <h4>Measure Your Wrist <span style="font-size:12px;">(more accurate but a little harder)</span></h4>
          <p>Use a flexible measuring tape to measure the circumference around the bony prominences of your wrist.  Find your frame size listed in the table above.  You can also use a string and then measure the string if you do not have a flexible measuring tape.</p>
          <!--///////////////-->
          <!--     WOMEN     -->
          <h5 style="font-size:16px;">For Women</h5>
          <table class="info_table">
               <thead>
                    <tr class="table_title_row border_bottom">
                         <td class="border_right">
                              HEIGHT
                         </td>
                         <td>
                              Less than 5&rsquo; 2"
                         </td>
                         <td>
                              5&rsquo; 2" - 5&rsquo; 5"
                         </td>
                         <td>
                              More than 5&rsquo; 5"
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              FRAME SIZE
                         </td>
                         <td colspan="3" align="center">
                              WRIST MEASUREMENT
                         </td>
                    </tr>
               </thead>
               <tbody>
                    <tr class="odd">
                         <td class="border_right">
                              Small
                         </td>
                         <td>
                              Less than 5.5&rdquo;
                         </td>
                         <td>
                              Less than 6.0&rdquo;
                         </td>
                         <td>
                              Less than 6.25&rdquo;
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              Medium
                         </td>
                         <td>
                              5.5&rdquo; - 5.75&rdquo;
                         </td>
                         <td>
                              6&rdquo; - 6.25&rdquo;
                         </td>
                         <td>
                              6.25&rdquo; - 6.5&rdquo;
                         </td>
                    </tr>
                    <tr class="odd">
                         <td class="border_right">
                              Large
                         </td>
                         <td>
                              More than 5.75-6.25&rdquo;
                         </td>
                         <td>
                              6.25-6.5&rdquo;
                         </td>
                         <td>
                              More than 6.5&rdquo;
                         </td>
                    </tr>
               </tbody>
          </table>
          <!--     WOMEN     -->
          <!--///////////////-->
          
          <!--/////////////-->
          <!--     MEN     -->
          <h5 style="font-size:16px;margin-top:20px;">For Men</h5>
          <table class="info_table">
               <thead>
                    <tr class="table_title_row border_bottom">
                         <td class="border_right">
                              HEIGHT
                         </td>
                         <td>
                              
                         </td>
                         <td colspan="3" align="center">
                              Any Height
                         </td>
                         <td>
                              
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              FRAME SIZE
                         </td>
                         <td colspan="5" align="center">
                              WRIST MEASUREMENT
                         </td>
                    </tr>
               </thead>
               <tbody>
                    <tr class="odd">
                         <td class="border_right">
                              Small
                         </td>
                         <td>
                              
                         </td>
                         <td colspan="3" align="center">
                              5.5&rdquo; - 6.5&rdquo;
                         </td>
                         <td>
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              Medium
                         </td>
                         <td>
                         </td>
                         <td colspan="3" align="center">
                              6.5&rdquo; - 7.5&rdquo;
                         </td>
                         <td>
                         </td>
                    </tr>
                    <tr class="odd">
                         <td class="border_right">
                              Large
                         </td>
                         <td>
                         </td>
                         <td colspan="3" align="center">
                              More than 7.5&rdquo;
                         </td>
                         <td>
                         </td>
                    </tr>
               </tbody>
          </table>
          <!--     MEN     -->
          <!--/////////////-->
     </div>
     <!--            MEASURE WRIST            -->
     <!--/////////////////////////////////////-->
     <div class="clear tall_20"></div>
     
     <!--/////////////////////////////////////-->
     <!--            ELBOW                    -->
     <div class="col-md-7  info_table_wrapper">
          <h4>Elbow Measurement <span style="font-size:12px;">(most accurate and most difficult)</span></h4>
          <p>Measure the distance between the bony prominences of your elbow.  This is most accurately done with  a caliper but you could approximate it by using your fingers and placing them along a measuring tape.  If you choose to do the later method, I would recommend three different measurements and then taking the average of those measurements.</p>
          
          <!--///////////////-->
          <!--     WOMEN     -->
          <h5 style="font-size:16px;margin-top:20px;">For Women</h5>
          <table class="info_table">
               <thead>
                    <tr class="table_title_row">
                         <td class="border_right" style="background:none; border-bottom:none;">
                              HEIGHT
                         </td>
                         <td>
                              SMALL FRAME
                         </td>
                         <td>
                              MEDIUM FRAME
                         </td>
                         <td>
                              LARGE FRAME
                         </td>
                    </tr>
               </thead>
               <tbody>
                    <tr class="odd">
                         <td class="border_right">
                              4&rsquo; 10&rdquo; – 5&rsquo; 3&rdquo;
                         </td>
                         <td>
                              Less than 2 3/4&rdquo;
                         </td>
                         <td>
                              2 1/4&rdquo; - 2 1/2&rdquo;
                         </td>
                         <td>
                              More than 2 1/2&rdquo;
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              5&rsquo; 4&rdquo; - 5&rsquo; 11&rdquo;
                         </td>
                         <td>
                              Less than 2 3/8 &rdquo;
                         </td>
                         <td>
                              2 3/8&rdquo; – 2 5/8&rdquo;
                         </td>
                         <td>
                              More than 2 5/8&rdquo;
                         </td>
                    </tr>
                    <tr class="odd">
                         <td class="border_right">
                              6&rsquo; 0&rdquo; - 6&rsquo; 4&rdquo;
                         </td>
                         <td>
                              Less than 2 1/2&rdquo;
                         </td>
                         <td>
                              2 1/2&rdquo; - 2 3/4&rdquo;
                         </td>
                         <td>
                              More than 2 3/4&rdquo;
                         </td>
                    </tr>
               </tbody>
          </table>
          <!--     WOMEN     -->
          <!--///////////////-->
          
          
          <!--/////////////-->
          <!--     MEN     -->
          <h5 style="font-size:16px;margin-top:20px;">For Men</h5>
          <table class="info_table">
               <thead>
                    <tr class="table_title_row">
                         <td class="border_right" style="background:none; border-bottom:none;">
                              HEIGHT
                         </td>
                         <td>
                              SMALL FRAME
                         </td>
                         <td>
                              MEDIUM FRAME
                         </td>
                         <td>
                              LARGE FRAME
                         </td>
                    </tr>
               </thead>
               <tbody>
                    <tr class="odd">
                         <td class="border_right">
                              5&rsquo; 2&rdquo; - 5&rsquo; 3&rdquo;
                         </td>
                         <td>
                              Less than 2 1/2&rdquo;
                         </td>
                         <td>
                              2 1/2&rdquo; - 2 7/8&rdquo;
                         </td>
                         <td>
                              More than 2 7/8&rdquo;
                         </td>
                    </tr>
                    
                    <tr>
                         <td class="border_right">
                              5&rsquo; 4&rdquo; - 5&rsquo; 7&rdquo;
                         </td>
                         <td>
                              Less than 2 5/8&rdquo;
                         </td>
                         <td>
                              2 5/8&rdquo; - 2 7/8&rdquo;
                         </td>
                         <td>
                              More than 2 7/8&rdquo;
                         </td>
                    </tr>
                    <tr class="odd">
                         <td class="border_right">
                              5&rsquo; 8&rdquo; - 5&rsquo; 11&rdquo;
                         </td>
                         <td>
                              Less than 2 3/4&rdquo;
                         </td>
                         <td>
                              2 3/4&rdquo; - 3&rdquo;
                         </td>
                         <td>
                              More than 3&rdquo;
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              6&rsquo; 0&rdquo; - 6&rsquo; 3&rdquo;
                         </td>
                         <td>
                              Less than 2 3/4&rdquo;
                         </td>
                         <td>
                              2 3/4&rdquo; - 3 1/8&rdquo;
                         </td>
                         <td>
                              More than 3 1/8&rdquo;
                         </td>
                    </tr>
                    <tr>
                         <td class="border_right">
                              6&rsquo; 4&rdquo; - 6&rsquo; 7&rdquo;
                         </td>
                         <td>
                              Less than 2 7/8&rdquo;
                         </td>
                         <td>
                              2 7/8&rdquo; - 3 1/4&rdquo;
                         </td>
                         <td>
                              More than 3 1/4&rdquo;
                         </td>
                    </tr>
               </tbody>
          </table>
          <!--     MEN     -->
          <!--/////////////-->
          
          
     </div>
     <!--            ELBOW                    -->
     <!--/////////////////////////////////////-->
     