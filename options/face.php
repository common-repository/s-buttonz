<?php
// Retrieve Options
get_option('SButtonZ_face') == "" ? "" : extract(get_option('SButtonZ_face'));
// Start Facebook Settings
if ($hide9 == 'show') {
    _e('<input type="hidden" target="SBZ-hide9" name="SBZ-hide9" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide9" name="SBZ-hide9" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ9">
      <h3 class="hndle SBZ-h" target="SBZ-hide9"><span><?php _e('Facebook Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide9">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Hide Buttons On...
</td><td colspan="2">
<input type="checkbox" name="FBhome" <?php _e($FBhome=="on" ? "checked=on" : ""); ?> /> Home Page (Recommended to speed up your Home Page's load time.)<br />
<input type="checkbox" name="FBpost" <?php _e($FBpost=="on" ? "checked=on" : ""); ?> /> Posts<br />
<input type="checkbox" name="FBpage" <?php _e($FBpage=="on" ? "checked=on" : ""); ?> /> Pages<br />
<input type="checkbox" name="FBtag" <?php _e($FBtag=="on" ? "checked=on" : ""); ?> /> Tag Pages<br />
<input type="checkbox" name="FBarch" <?php _e($FBarch=="on" ? "checked=on" : ""); ?> /> Archives (This is all Category, Author and Date based pages)<br />
<input type="checkbox" name="FBsrch" <?php _e($FBsrch=="on" ? "checked=on" : ""); ?> /> Search Page Results<br />
<span class="SBZ-Red">Single Page or Post
<br />Note: Add the following html snippet to any page or post you would like to the hide the digg button on.
<br />&lt;!--faceZ=none--&gt;
</span>
</td></tr>
<tr>
<th scope="row">
Button Position
</td><td colspan="2">
<select id="FBdisplay1" name="FBdisplay1">	
	<option value="" <?php _e($FBdisplay1=="" ? "selected" : ""); ?>>Top Right</option>
	<option value="left" <?php _e($FBdisplay1=="left" ? "selected" : ""); ?>>Top Left</option>
	<option value="bottom" <?php _e($FBdisplay1=="bottom" ? "selected" : ""); ?>>Bottom</option>
</select>
</td></tr>
<tr>
<th scope="row">
Skin Type
</td><td style="vertical-align:top;">
<select id="FBskin" name="FBskin">
	<option value="" <?php _e($FBskin=="" ? "selected" : ""); ?>>Share Button</option>
	<option value="icon" <?php _e($FBskin=="icon" ? "selected" : ""); ?>>Icon</option>
	<option value="iconT" <?php _e($FBskin=="iconT" ? "selected" : ""); ?>>Icon with Text</option>
	<option value="link" <?php _e($FBskin=="link" ? "selected" : ""); ?>>Text Link</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()); ?>images/face-examples.png" width="400px" height="100px" />
</td></tr>
</table>
      </div>
    </div>
  </div>
