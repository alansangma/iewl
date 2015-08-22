<div class="grid_12 alpha">
     <h3>Waist to Hip Ratio</h3>
</div>

<div class="clear"></div>

<div class="grid_5 alpha">
     <p>Waist to hip ratio has been found to be a predictor of health.  Optimal values for waist to hip ratio are 0.7 in women and 0.9 in men.  Values greater than 0.8 in women and 0.95 in men are associated with higher incidences of diabetes, cardiovascular disease, and ovarian, prostate, and testicular cancers.</p>
     
     <p>Waist measurements are generally taken 1 inch above the navel.  The hips are measured at the level of the greater trochanters which is generally the widest portion of your hips.</p>
     
     <!--<p>If your waist to hip ratio is greater than 0.8 for a woman or greater than 0.95 for a man, you should lose weight to lower your risk of heart disease, diabetes, and cancer.</p>-->
</div>

<div class="grid_6 omega prefix_1">
     <div class="grid_2 alpha omega">
          <form class="tools_form" name="tools_form" method="post" onsubmit="return false;">
          <table class="form_table">
               <tbody>
                    <tr>
                         <td><h4>WAIST <span style="font-size:0.8em;">(in inches)</span></h4></td>
                    </tr>
                    <tr>
                         <td>
                              <input type="number" name="waist" class="number_input" id="waist" tabindex="1" />
                         </td>
                    </tr>
                    <tr>
                         <td><h4>HIP <span style="font-size:0.8em;">(in inches)</span></h4></td>
                    </tr>
                    <tr>
                         <td>
                              <input type="number" name="hip" class="number_input" id="hip" tabindex="2" />
                         </td>
                    </tr>
                    <tr>
                         <td colspan="2">
                              <input type="submit" name="submit" class="submit_input" value="CALCULATE" onclick="calculateWaistHip();" />
                         </td>
                    </tr>
               </tbody>
          </table>
          </form>
     </div>
     
     <div class="grid_3 prefix_1 calc_result_wrapper">
          <h4>WAIST TO HIP RATIO</h4>
          <div id="calc_result"></div>
     </div>
     
     <div class="clear"></div>
     
     <div class="grid_5 alpha" style="height:100px;">
     <p style="margin-left:0; display:none;" id="warning">If your waist to hip ratio is greater than 0.80 for a woman or greater than 0.95 for a man, you should lose weight to lower your risk of heart disease, diabetes, and cancer.</p>
     </div>
</div>