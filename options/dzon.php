<?php
// Retrieve Options
get_option('SButtonZ_dzon') == "" ? "" : extract(get_option('SButtonZ_dzon'));
//Start dZone Settings
if ($hide5 == 'show') {
    _e('<input type="hidden" target="SBZ-hide5" name="SBZ-hide5" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide5" name="SBZ-hide5" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ5">
      <h3 class="hndle SBZ-h" target="SBZ-hide5"><span><?php _e('dZone Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide5">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Hide Buttons On...
</td><td colspan="2">
<input type="checkbox" name="DZhome" <?php _e($DZhome=="on" ? "checked=on" : ""); ?> /> Home Page (Recommended to speed up your Home Page's load time.)<br />
<input type="checkbox" name="DZpost" <?php _e($DZpost=="on" ? "checked=on" : ""); ?> /> Posts<br />
<input type="checkbox" name="DZpage" <?php _e($DZpage=="on" ? "checked=on" : ""); ?> /> Pages<br />
<input type="checkbox" name="DZtag" <?php _e($DZtag=="on" ? "checked=on" : ""); ?> /> Tag Pages<br />
<input type="checkbox" name="DZarch" <?php _e($DZarch=="on" ? "checked=on" : ""); ?> /> Archives (This is all Category, Author and Date based pages)<br />
<input type="checkbox" name="DZsrch" <?php _e($DZsrch=="on" ? "checked=on" : ""); ?> /> Search Page Results<br />
<span class="SBZ-Red">Single Page or Post
<br />Note: Add the following html snippet to any page or post you would like to the hide the dZone button on.
<br />&lt;!--dzoneZ=none--&gt;
</span>
</td></tr>
<tr>
<th scope="row">
Button Position
</td><td colspan="2">
<select id="DZdisplay1" name="DZdisplay1">
	<option value="" <?php _e($DZdisplay1=="" ? "selected" : ""); ?>>Top Right</option>
	<option value="left" <?php _e($DZdisplay1=="left" ? "selected" : ""); ?>>Top Left</option>
	<option value="bottom" <?php _e($DZdisplay1=="bottom" ? "selected" : ""); ?>>Bottom</option>
</select>
</td></tr>
<tr>
<th scope="row">
Choose Style
</td><td style="vertical-align:top;">
<select id="DZstyle" name="DZstyle">
	<option value="" <?php _e($DZstyle=="" ? "selected" : ""); ?>>Style 1</option>
	<option value="2" <?php _e($DZstyle=="2" ? "selected" : ""); ?>>Style 2</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()) ?>images/dzone-examples.png" width="300px" height="120px" />
</td></tr>
<tr>
<th scope="row">
Description (Blurb)
</td><td colspan="2">
<select id="DZbody" name="DZbody">
	<option value="" <?php _e($DZbody=="" ? "selected" : ""); ?>>Manual (Blank Summary)</option>
	<option value="150" <?php _e($DZbody=="150" ? "selected" : ""); ?>>150 Charachter Summary</option>
	<option value="250" <?php _e($DZbody=="250" ? "selected" : ""); ?>>250 Charachter Summary</option>
</select>
</td></tr>
</table>
      </div>
    </div>
  </div>
