<?php
// Retrieve Options
get_option('SButtonZ_redd') == "" ? "" : extract(get_option('SButtonZ_redd'));
// Start reddit Settings
if ($hide6 == 'show') {
    _e('<input type="hidden" target="SBZ-hide6" name="SBZ-hide6" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide6" name="SBZ-hide6" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ6">
      <h3 class="hndle SBZ-h" target="SBZ-hide6"><span><?php _e('reddit Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide6">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Hide Buttons On...
</td><td colspan="2">
<input type="checkbox" name="RDhome" <?php _e($RDhome=="on" ? "checked=on" : ""); ?> /> Home Page (Recommended to speed up your Home Page's load time.)<br />
<input type="checkbox" name="RDpost" <?php _e($RDpost=="on" ? "checked=on" : ""); ?> /> Posts<br />
<input type="checkbox" name="RDpage" <?php _e($RDpage=="on" ? "checked=on" : ""); ?> /> Pages<br />
<input type="checkbox" name="RDtag" <?php _e($RDtag=="on" ? "checked=on" : ""); ?> /> Tag Pages<br />
<input type="checkbox" name="RDarch" <?php _e($RDarch=="on" ? "checked=on" : ""); ?> /> Archives (This is all Category, Author and Date based pages)<br />
<input type="checkbox" name="RDsrch" <?php _e($RDsrch=="on" ? "checked=on" : ""); ?> /> Search Page Results<br />
<span class="SBZ-Red">Single Page or Post
<br />Note: Add the following html snippet to any page or post you would like to the hide the reddit button on.
<br />&lt;!--reddZ=none--&gt;
</span>
</td></tr>
<tr>
<th scope="row">
Button Position
</td><td colspan="2">
<select id="RDdisplay1" name="RDdisplay1">
	<option value="" <?php _e($RDdisplay1=="" ? "selected" : ""); ?>>Top Right</option>
	<option value="left" <?php _e($RDdisplay1=="left" ? "selected" : ""); ?>>Top Left</option>
	<option value="bottom" <?php _e($RDdisplay1=="bottom" ? "selected" : ""); ?>>Bottom</option>
</select>
</td></tr>
<tr>
<th scope="row">
Choose Style
</td><td style="vertical-align:top;">
<select id="RDstyle" name="RDstyle">
	<option value="" <?php _e($RDstyle=="" ? "selected" : ""); ?>>Style 1</option>
	<option value="2" <?php _e($RDstyle=="2" ? "selected" : ""); ?>>Style 2</option>
	<option value="3" <?php _e($RDstyle=="3" ? "selected" : ""); ?>>Style 3</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()); ?>images/reddit-examples.png" width="280px" height="100px" />
</td></tr>
</table>
      </div>
    </div>
  </div>
