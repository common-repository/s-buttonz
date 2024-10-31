<?php
// Retrieve General & Hide Settings
get_option('SButtonZ_gen') == "" ? "" : extract(get_option('SButtonZ_gen'));
get_option('SButtonZ_hide') == "" ? "" : extract(get_option('SButtonZ_hide'));
//Choose Buttons
if ($hide1 == 'show') {
    _e('<input type="hidden" target="SBZ-hide1" name="SBZ-hide1" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide1" name="SBZ-hide1" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle SBZ-h" target="SBZ-hide1"><span><?php _e('Choose Social Media Buttons to Display','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide1">
<table width="100%" class="SBZ-Pad">
<tr><td>
<input type="checkbox" class="SBZ-chx" target="SBZ4" name="digg" <?php _e($digg=="on" ? "checked=on" : ""); ?> /> Digg <br />
<input type="checkbox" class="SBZ-chx" target="SBZ5" name="dzon" <?php _e($dzon=="on" ? "checked=on" : ""); ?> /> dZone<br />
<input type="checkbox" class="SBZ-chx" target="SBZ9" name="face" <?php _e($face=="on" ? "checked=on" : ""); ?> /> FaceBook < --- <span class="SBZ-New">New!</span><br />
<input type="checkbox" class="SBZ-chx" target="SBZ6" name="redd" <?php _e($redd=="on" ? "checked=on" : ""); ?> /> Reddit<br />
<input type="checkbox" class="SBZ-chx" target="SBZ7" name="yaho" <?php _e($yaho=="on" ? "checked=on" : ""); ?> /> Yahoo Buzz!<br />
<span class="SBZ-Red">A settings box will appear below for each selected button after the settings have been updated.<br /><br />
Is there a social media button you'd like to see in S-ButtonZ?<br />
Do you have an idea for the S-ButtonZ plugin?<br />
<a href="http://feedback.rswr.net/pages/s_button_z" target="_blank">Leave Feedback, Suggestions and Bug Reports Here</a>
</span>
</td></tr>
</table>
      </div>
    </div>
  </div>
