<div class="grid_12 alpha">
     <h3>Body Fat Content</h3>
</div>
<div class="clear"></div>
<div class="grid_5 alpha">
<p>This body fat calculator is used by the US Navy to approximate body fat in new recruits. Other methods used to approximate body fat can include calipers, bio-impedance, infra-red, dexa scanning and dunking yourself in a large calibrated tub of water. In our clinic, we use a bio-impedance scale.  This is a technique that does not require any equipment other than a measuring tape but it may be less accurate as well.</p>
</div>
<div class="grid_3 omega">
	<form class="tools_form" name="tools_form" method="post" onsubmit="return false;">
	<table class="form_table">
     	<tbody>
               
               <tr>
               	<td colspan="2"><h4>SEX</h4></td>
               </tr>
               <tr>
                    <td colspan="2">
                         <select class="select_input" name="sex" id="sex" tabindex="1">
                              <option value="select">select</option>
                              <option value="FEMALE">FEMALE</option>
                              <option value="MALE">MALE</option>
                         </select>
                    </td>
               </tr>
               
               <tr>
                    <td colspan="2"><h4>WEIGHT</h4></td>
               </tr>
               <tr>
                    <td class="label_d">
                         <label for="pounds">Pounds:</label>
                    </td>
                    <td class="number_d">
                         <input type="number" name="pounds" class="number_input" id="pounds" tabindex="2" />
                    </td>
               </tr>
               <!--///////////////////////////-->
               <!--           HEIGHT          -->
               <tr>
                    <td colspan="2"><h4 style="line-height:1em; margin:10px 0;">HEIGHT</h4></td>
               </tr>
               <tr>
               	<td class="label_d">
                    	<label for="feet">
                         	Feet:
                         </label>
                    </td>
                    <td>
                         <input type="number" name="feet" class="number_input" id="feet" tabindex="3" />
                    </td>
               </tr>
               <tr>
               	<td class="label_d">
                    	<label for="inches">
                         	Inches:
                         </label>
                    </td>
                    <td>
                         <input type="number" name="inches" class="number_input" id="inches" tabindex="4" />
                    </td>
               </tr>
               <!--           HEIGHT          -->
               <!--///////////////////////////-->
               
               
               <!--///////////////////////////-->
               <!--        MEASUREMENTS       -->
               <tr>
                    <td colspan="2"><h4 style="line-height:1em; margin:10px 0;">MEASUREMENTS <span style="font-size:0.8em;">(in inches)</span></h4></td>
               </tr>
               <tr>
               	<td class="label_d">
                    	<label for="wrist">
                         	Waist (at navel):
                         </label>
                    </td>
                    <td>
                         <input type="number" name="waist" class="number_input" id="waist" tabindex="5" />
                    </td>
               </tr>
               
               <!--///////////////////////////-->
               <!--        FEMALE MEAS.       -->
                    <tr class="female_measurement">
                         <td class="label_d">
                              <label for="hip">
                                   Hip:
                              </label>
                         </td>
                         <td>
                              <input type="number" name="hip" class="number_input" id="hip" tabindex="6" />
                         </td>
                    </tr>
                    <!--
                    <tr class="female_measurement">
                         <td class="label_d">
                              <label for="wrist">
                                   Wrist:
                              </label>
                         </td>
                         <td>
                              <input type="number" name="wrist" class="number_input" id="wrist" tabindex="5" />
                         </td>
                    </tr>
                    <tr class="female_measurement">
                         <td class="label_d">
                              <label for="forearm">
                                   Forearm:
                              </label>
                         </td>
                         <td>
                              <input type="number" name="forearm" class="number_input" id="forearm" tabindex="6" />
                         </td>
                    </tr>-->
               <!--        FEMALE MEAS.       -->
               <!--///////////////////////////-->
               
               <tr>
               	<td class="label_d">
                    	<label for="wrist">
                         	Neck:
                         </label>
                    </td>
                    <td>
                         <input type="number" name="neck" class="number_input" id="neck" tabindex="7" />
                    </td>
               </tr>
               <!--        MEASUREMENTS       -->
               <!--///////////////////////////-->
               <tr>
                    <td colspan="2">
                         <input type="submit" name="submit" class="submit_input" value="CALCULATE" onclick="calculateBodyFatContent();" tabindex="8" />
                    </td>
               </tr>
          </tbody>
     </table>
     </form>
</div>

<div class="grid_4 calc_result_wrapper">
	<h4 style="margin-left:5%;">BODY FAT CONTENT</h4>
	<div id="calc_result" style="width:90%; margin-left:5%; height:100px;"></div>
    <!-- <p class="note" style="margin-left:5%;">Please see chart below.</p>-->
</div>

<div class="clear tall_10">
</div>