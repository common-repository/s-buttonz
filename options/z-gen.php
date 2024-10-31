<?php
//Promote S-ButtonZ
if ($hide2 == 'show') {
    _e('<input type="hidden" target="SBZ-hide2" name="SBZ-hide2" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide2" name="SBZ-hide2" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle SBZ-h" target="SBZ-hide2"><span><?php _e('Other Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide2">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Help promote S-ButtonZ?
</td><td>
<input type="checkbox" name="prom" <?php _e($prom=="on" ? "checked=on" : ""); ?> /> Place a support link at the bottom of each post/page that uses S-ButtonZ. Thanks for your support!
</td></tr>
</table>
      </div>
    </div>
  </div>
<?php
//ChangeLog
if ($hide3 == 'show') {
    _e('<input type="hidden" target="SBZ-hide3" name="SBZ-hide3" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide3" name="SBZ-hide3" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox">
      <h3 class="hndle SBZ-h" target="SBZ-hide3"><span><?php _e('ChangeLog','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide3">
<table width="100%" class="SBZ-Pad">
<tr>
<td>
1.1.5 - 9/17/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed a bug causing Digg API buttons to sometimes display an inaccurate amount of diggs or none at all. <br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed the incorrect submission link bug for Digg API Buttons.
<br /><br />
1.1.4 - 6/13/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added manual button placement with new shortcode<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Updated the CSS for boxes to fix visual glitch
<br /><br />
1.1.3 - 5/16/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed an issue where certain text in a summary would break other button settings<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed the blank topic issue
<br /><br />
1.1.2 - 5/5/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed PHP4 compatibility issue - digg API should now work with PHP4.4+
<br /><br />
1.1.1 - 5/3/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added New Social Media Buttons: Facebook Share Buttons<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed media format bug<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Fixed API graphic link for custom digg buttons<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Digg API box will now disappear if digg is unselected with digg API left on
<br /><br />
1.1.0 - 5/2/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added Digg API (Beta)<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added custom digg CSS buttons (Digg API)<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added digg threshold option (Digg API)<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Changed bottom positioning to stack side by side
<br /><br />
1.0.6 - 3/21/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Minor code clean up fix
<br /><br />
1.0.5 - 3/19/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Emergency Bug Fix: Fixed an issue that called an option before it even existed.
<br /><br />
1.0.4 - 3/19/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Major code cleanup, code was cleaned up to speed up admin backend and button loading. (Anyone upgrading will need to reset their settings, due to the code changes, my apologies.)
<br /><br />
1.0.3 - 3/18/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Media scan updated to work properly for both digg/yahoo buzz buttons. Now only uses one html comment for both.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;* Minor code clean up.
<br /><br />
1.0.2 - 2/24/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Minor JS Adjustments<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Minor CSS Adjustments<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Added ChangeLog Information to Admin
<br /><br />
1.0.1 - 2/22/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Path fix for JavaScript File
<br /><br />
1.0.0 - 2/21/09
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* Initial Release
</td></tr>
</table>
      </div>
    </div>
  </div>
